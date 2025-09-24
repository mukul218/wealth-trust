<?php
session_start();
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// ✅ Require admin login
if (!isset($_SESSION['admin'])) {
    response(["message" => "Unauthorized access"], "error", 401);
}

$id = intval($_POST['id'] ?? 0);

if ($id <= 0) {
    response(["message" => "Invalid admin ID"], "error", 400);
}

// ✅ Prevent deleting yourself (important)
if ($_SESSION['admin_id'] == $id) {
    response(["message" => "You cannot delete your own account"], "error", 403);
}

$stmt = $conn->prepare("DELETE FROM admin_login WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    response(["message" => "Admin deleted successfully"], "success");
} else {
    response(["message" => "Failed to delete admin: " . $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
