<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$query = "SELECT id, email, is_active, created_at FROM newsletter_subscriptions ORDER BY created_at DESC";
$result = $conn->query($query);

if (!$result) {
    response(["message" => "DB error: " . $conn->error], "error", 500);
}

$subscribers = [];
while ($row = $result->fetch_assoc()) {
    $subscribers[] = $row;
}

response([
    "message"     => "Subscribers fetched successfully",
    "subscribers" => $subscribers
], "success");

$conn->close();
