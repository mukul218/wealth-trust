<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// Input
$id = intval($_POST['id'] ?? 0);

if ($id <= 0) {
    response(["message" => "Invalid career request ID"], "error", 400);
}

// Delete record
$stmt = $conn->prepare("DELETE FROM career_requests WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute() && $stmt->affected_rows > 0) {
    response([
        "message" => "Career request deleted successfully"
    ], "success");
} else {
    response([
        "message" => "Failed to delete career request or record not found",
        "db_error" => $stmt->error
    ], "error", 500);
}

$stmt->close();
$conn->close();
