<?php
session_start();
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// ✅ Require admin
if (!isset($_SESSION['admin'])) {
    response(["message" => "Unauthorized access"], "error", 401);
}

$id          = intval($_POST['id'] ?? 0);
$title       = trim($_POST['title'] ?? '');
$description = trim($_POST['description'] ?? '');
$url         = trim($_POST['url'] ?? '');

if ($id <= 0 || empty($title) || empty($url)) {
    response(["message" => "Invalid input"], "error", 400);
}

$stmt = $conn->prepare("
    UPDATE videos
    SET title=?, description=?, url=?
    WHERE id=?
");
$stmt->bind_param("sssi", $title, $description, $url, $id);

if ($stmt->execute()) {
    response(["message" => "Video updated successfully"], "success");
} else {
    response(["message" => "Failed to update video: " . $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
