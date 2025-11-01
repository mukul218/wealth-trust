<?php
session_start();

include_once __DIR__ . "/../../core/config.php";
include_once __DIR__ . "/../../core/helpers.php";

// --- Check admin session ---
if (!isset($_SESSION['admin'])) {
    response(['message' => 'Unauthorized access'], 'error', 401);
}

// --- Collect and validate input ---
$title   = trim($_POST['title'] ?? '');
$slug    = trim($_POST['slug'] ?? '');
$content = trim($_POST['content'] ?? '');
$category = trim($_POST['category'] ?? '');
$tags     = trim($_POST['tags'] ?? '');
$is_published = isset($_POST['is_published']) ? 1 : 0;
$author = $_SESSION['admin'];

if (empty($title) || empty($content)) {
    response(['message' => 'Please fill all required fields'], 'error', 400);
}

// --- Format or generate slug ---
if (empty($slug)) {
    $slug = $title;
}

// Convert to lowercase
$slug = strtolower($slug);

// Replace non-alphanumeric characters with hyphens
$slug = preg_replace('/[^a-z0-9]+/i', '-', $slug);

// Trim hyphens from start and end
$slug = trim($slug, '-');

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
    $public_url = $public_path . $filename;

    $ext = strtolower(pathinfo($target_path, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    if (!in_array($ext, $allowed)) {
        response(['message' => 'Invalid image type'], 'error', 400);
    }

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_path)) {
        $image_url = $public_url;
    } else {
        response(['message' => 'Image upload failed'], 'error', 500);
    }
}

// --- Insert into DB ---
$stmt = $conn->prepare("
    INSERT INTO blogs (title, slug, content, image_url, author, category, tags, is_published)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
");

if (!$stmt) {
    response(['message' => 'Prepare failed', 'db_error' => $conn->error], 'error', 500);
}

$stmt->bind_param("sssssssi", $title, $slug, $content, $image_url, $author, $category, $tags, $is_published);

if ($stmt->execute()) {
    response(['message' => 'Blog posted successfully!', 'id' => $stmt->insert_id]);
} else {
    response(['message' => 'Database error', 'db_error' => $stmt->error], 'error', 500);
}
