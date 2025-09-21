<?php
session_start();
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// ✅ Require admin
if (!isset($_SESSION['admin'])) {
    response(["message" => "Unauthorized access"], "error", 401);
}

$id = intval($_POST['id'] ?? 0);

if ($id <= 0) {
    response(["message" => "Invalid video ID"], "error", 400);
}

$stmt = $conn->prepare("DELETE FROM videos WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    response(["message" => "Video deleted successfully"], "success");
} else {
    response(["message" => "Failed to delete video: " . $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
