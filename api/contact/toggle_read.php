<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// ✅ Input
$id = intval($_POST['id'] ?? 0);
$status = intval($_POST['status'] ?? -1); // 1=Read, 0=Unread

if ($id <= 0 || ($status !== 0 && $status !== 1)) {
    response(["message" => "Invalid input"], "error", 400);
}

$stmt = $conn->prepare("UPDATE contact_requests SET is_read = ? WHERE id = ?");
$stmt->bind_param("ii", $status, $id);

if ($stmt->execute()) {
    $msg = $status ? "Marked as Read" : "Marked as Unread";
    response(["message" => $msg], "success");
} else {
    response(["message" => "Failed to update: " . $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
