<?php
session_start();
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// ✅ Require admin
if (!isset($_SESSION['admin'])) {
    response(["message" => "Unauthorized access"], "error", 401);
}

$id     = intval($_POST['id'] ?? 0);
$status = intval($_POST['status'] ?? -1); // 1=publish, 0=unpublish

if ($id <= 0 || ($status !== 0 && $status !== 1)) {
    response(["message" => "Invalid input"], "error", 400);
}

$stmt = $conn->prepare("UPDATE videos SET is_published=? WHERE id=?");
$stmt->bind_param("ii", $status, $id);

if ($stmt->execute()) {
    $msg = $status ? "Video published" : "Video unpublished";
    response(["message" => $msg], "success");
} else {
    response(["message" => "Failed to update publish status: " . $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
