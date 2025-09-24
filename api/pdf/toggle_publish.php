<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$id = intval($_POST['id'] ?? 0);
$currentStatus = intval($_POST['status'] ?? 0);

if ($id <= 0) {
    response(["message" => "Invalid PDF ID"], "error", 400);
}

$newStatus = $currentStatus == 1 ? 0 : 1;

$stmt = $conn->prepare("UPDATE pdf_files SET is_published=? WHERE id=?");
$stmt->bind_param("ii", $newStatus, $id);

if ($stmt->execute()) {
    response(["message" => "PDF status updated successfully"], "success");
} else {
    response(["message" => "Failed to update PDF status"], "error", 500);
}
