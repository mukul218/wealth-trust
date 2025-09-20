<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$id = intval($_POST['id'] ?? 0);

if ($id <= 0) {
    response(["message" => "Invalid subscriber ID"], "error", 400);
}

$stmt = $conn->prepare("DELETE FROM newsletter_subscriptions WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    response(["message" => "Subscriber deleted successfully"], "success");
} else {
    response(["message" => "Failed to delete: " . $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
