<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$id = intval($_POST['id'] ?? 0);

if ($id <= 0) {
    response(["message" => "Invalid complaint ID"], "error", 400);
}

$stmt = $conn->prepare("DELETE FROM complaints WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        response(["message" => "Complaint deleted successfully"], "success");
    } else {
        response(["message" => "Complaint not found"], "error", 404);
    }
} else {
    response(["message" => "Failed to delete complaint", "db_error" => $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
