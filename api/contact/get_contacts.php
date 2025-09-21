<?php
session_start();
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// ✅ Require login
if (!isset($_SESSION['admin'])) {
    response(["message" => "Unauthorized access"], "error", 401);
}

// ✅ Fetch all contact requests
$query = "SELECT id, full_name, email, contact, message, created_at, is_read FROM contact_requests ORDER BY created_at DESC";
$result = $conn->query($query);

if (!$result) {
    response(["message" => "DB error: " . $conn->error], "error", 500);
}

$contacts = [];
while ($row = $result->fetch_assoc()) {
    $row = array_map(fn($v) => is_string($v) ? mb_convert_encoding($v, 'UTF-8', 'UTF-8') : $v, $row);
    $contacts[] = $row;
}

response([
    "message" => "Contact requests fetched successfully",
    "count"   => count($contacts),
    "contacts" => $contacts
], "success");

$conn->close();
