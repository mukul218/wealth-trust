<?php
session_start();
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// ✅ Require login
if (!isset($_SESSION['admin'])) {
    response(["message" => "Unauthorized access"], "error", 401);
}

// ✅ Input
$title = trim($_POST['title'] ?? '');
$url   = trim($_POST['url'] ?? '');
$desc  = trim($_POST['description'] ?? '');

// ✅ Validation
if (empty($title) || empty($url)) {
    response(["message" => "Title and URL are required"], "error", 400);
}

// ✅ Extract YouTube video ID
$videoId = null;
if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/', $url, $matches)) {
    $videoId = $matches[1];
}
if (!$videoId) {
    response(["message" => "Invalid YouTube URL"], "error", 400);
}

$embedUrl = "https://www.youtube.com/embed/" . $videoId;

// ✅ Insert into DB
$stmt = $conn->prepare("INSERT INTO videos (title, url, description, created_at) VALUES (?, ?, ?, NOW())");
$stmt->bind_param("sss", $title, $embedUrl, $desc);

if ($stmt->execute()) {
    response([
        "message" => "Video added successfully!",
        "id"      => $stmt->insert_id,
        "embed"   => $embedUrl
    ], "success");
} else {
    response(["message" => "Failed to add video: " . $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
