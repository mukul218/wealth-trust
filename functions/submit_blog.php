<?php
session_start();
if (!isset($_SESSION['admin'])) {
    http_response_code(401);
    echo "Unauthorized access.";
    exit;
}

include_once "../database/config.php"; // Include database configuration


$title = trim($_POST['title'] ?? '');
$slug = trim($_POST['slug'] ?? '');
$content = trim($_POST['content'] ?? '');
$category = trim($_POST['category'] ?? '');
$tags = trim($_POST['tags'] ?? '');
$is_published = isset($_POST['is_published']) ? 1 : 0;
$author = $_SESSION['admin'];

if (empty($title) || empty($slug) || empty($content)) {
    http_response_code(400);
    echo "Please fill all required fields.";
    exit;
}

// Optional image upload
$image_url = null;
if (!empty($_FILES['image']['name'])) {
    $upload_dir = "uploads/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    $filename = time() . "_" . basename($_FILES["image"]["name"]);
    $target_path = $upload_dir . $filename;
    $ext = strtolower(pathinfo($target_path, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    if (!in_array($ext, $allowed)) {
        http_response_code(400);
        echo "Invalid image type.";
        exit;
    }

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_path)) {
        $image_url = $target_path;
    } else {
        http_response_code(500);
        echo "Image upload failed.";
        exit;
    }
}

// Insert into DB
$stmt = $conn->prepare("
    INSERT INTO blogs (title, slug, content, image_url, author, category, tags, is_published)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
");
$stmt->bind_param("sssssssi", $title, $slug, $content, $image_url, $author, $category, $tags, $is_published);

if ($stmt->execute()) {
    echo "Blog posted successfully!";
} else {
    http_response_code(500);
    echo "Database error: " . $stmt->error;
}
