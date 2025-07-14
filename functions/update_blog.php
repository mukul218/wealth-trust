<?php
session_start();
if (!isset($_SESSION['admin'])) {
    http_response_code(403);
    echo "Unauthorized.";
    exit;
}

include_once "../database/config.php";

$id = intval($_POST['id']);
$title = trim($_POST['title'] ?? '');
$slug = trim($_POST['slug'] ?? '');
$content = trim($_POST['content'] ?? '');
$category = trim($_POST['category'] ?? '');
$tags = trim($_POST['tags'] ?? '');
$is_published = isset($_POST['is_published']) ? 1 : 0;

if (empty($title) || empty($slug) || empty($content)) {
    http_response_code(400);
    echo "Required fields missing.";
    exit;
}

// Handle image upload if provided
$image_url = null;
if (!empty($_FILES['image']['name'])) {
    $upload_dir = "../uploads/";
    if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);

    $filename = time() . "_" . basename($_FILES["image"]["name"]);
    $target_path = $upload_dir . $filename;
    $ext = strtolower(pathinfo($target_path, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    if (!in_array($ext, $allowed)) {
        http_response_code(400);
        echo "Invalid image type.";
        exit;
    }

    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_path)) {
        http_response_code(500);
        echo "Image upload failed.";
        exit;
    }

    $image_url = "uploads/" . $filename;
}

// Build query
if ($image_url) {
    $stmt = $conn->prepare("
        UPDATE blogs
        SET title=?, slug=?, content=?, image_url=?, category=?, tags=?, is_published=?
        WHERE id=?
    ");
    $stmt->bind_param("ssssssii", $title, $slug, $content, $image_url, $category, $tags, $is_published, $id);
} else {
    $stmt = $conn->prepare("
        UPDATE blogs
        SET title=?, slug=?, content=?, category=?, tags=?, is_published=?
        WHERE id=?
    ");
    $stmt->bind_param("ssssssi", $title, $slug, $content, $category, $tags, $is_published, $id);
}

if ($stmt->execute()) {
    echo "Blog updated successfully.";
} else {
    http_response_code(500);
    echo "Update failed: " . $stmt->error;
}
