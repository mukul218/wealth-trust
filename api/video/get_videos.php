<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// ✅ Detect admin via POST param
$isAdmin = isset($_POST['admin']) && $_POST['admin'] === '1';

// ✅ Build query
$query = $isAdmin
    ? "SELECT * FROM videos ORDER BY created_at DESC"
    : "SELECT * FROM videos WHERE is_published = 1 ORDER BY created_at DESC";

$result = $conn->query($query);

if (!$result) {
    response(["message" => "DB error: " . $conn->error], "error", 500);
}

$videos = [];
while ($row = $result->fetch_assoc()) {
    // Ensure safe encoding
    $row = array_map(function ($value) {
        return is_string($value) ? mb_convert_encoding($value, 'UTF-8', 'UTF-8') : $value;
    }, $row);

    $videos[] = $row;
}

// ✅ Response
response([
    "message" => "Videos fetched successfully",
    "count"   => count($videos),
    "videos"  => $videos
], "success");

$conn->close();
