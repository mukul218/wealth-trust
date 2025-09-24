<?php
session_start();
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// ✅ Require admin login
if (!isset($_SESSION['admin'])) {
    response(["message" => "Unauthorized access"], "error", 401);
}

$result = $conn->query("SELECT id, username, created_at FROM admin_login ORDER BY id DESC");

$admins = [];
while ($row = $result->fetch_assoc()) {
    $admins[] = $row;
}

response(["admins" => $admins], "success");
