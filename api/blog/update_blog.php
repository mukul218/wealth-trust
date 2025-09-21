<?php
session_start();

include_once __DIR__ . "/../../core/config.php";
include_once __DIR__ . "/../../core/helpers.php";

// --- Check admin session ---
if (!isset($_SESSION['admin'])) {
    response(['message' => 'Unauthorized'], 'error', 403);
}

// --- Validate input ---
$id       = intval($_POST['id'] ?? 0);
$title    = trim($_POST['title'] ?? '');
$slug     = trim($_POST['slug'] ?? '');
$content  = trim($_POST['content'] ?? '');
$category = trim($_POST['category'] ?? '');
$tags     = trim($_POST['tags'] ?? '');
$is_published = isset($_POST['is_published']) ? 1 : 0;

if ($id <= 0 || empty($title) || empty($slug) || empty($content)) {
    response(['message' => 'Required fields missing or invalid ID'], 'error', 400);
}

// --- Handle optional image upload ---
$image_url = null;
if (!empty($_FILES['image']['name'])) {
    $upload_dir = __DIR__ . "/../../uploads/";
    $public_path = "uploads/";

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $filename = time() . "_" . basename($_FILES["image"]["name"]);
    $target_path = $upload_dir . $filename;
    $public_url  = $public_path . $filename;

    $ext = strtolower(pathinfo($target_path, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    if (!in_array($ext, $allowed)) {
        response(['message' => 'Invalid image type'], 'error', 400);
    }

    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_path)) {
        response(['message' => 'Image upload failed'], 'error', 500);
    }

    $image_url = $public_url;
}

// --- Prepare query ---
if ($image_url) {
    $stmt = $conn->prepare("
        UPDATE blogs
        SET title=?, slug=?, content=?, image_url=?, category=?, tags=?, is_published=?
        WHERE id=?
    ");
    if (!$stmt) {
        response(['message' => 'Prepare failed', 'db_error' => $conn->error], 'error', 500);
    }
    $stmt->bind_param("ssssssii", $title, $slug, $content, $image_url, $category, $tags, $is_published, $id);
} else {
    $stmt = $conn->prepare("
        UPDATE blogs
        SET title=?, slug=?, content=?, category=?, tags=?, is_published=?
        WHERE id=?
    ");
    if (!$stmt) {
        response(['message' => 'Prepare failed', 'db_error' => $conn->error], 'error', 500);
    }
    $stmt->bind_param("ssssssi", $title, $slug, $content, $category, $tags, $is_published, $id);
}

// --- Execute query ---
if ($stmt->execute()) {
    response(['message' => 'Blog updated successfully', 'id' => $id]);
} else {
    response(['message' => 'Update failed', 'db_error' => $stmt->error], 'error', 500);
}
