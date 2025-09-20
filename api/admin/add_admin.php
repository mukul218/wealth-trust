<?php
session_start();
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// ✅ Require login
if (!isset($_SESSION['admin'])) {
    response(["message" => "Unauthorized access"], "error", 401);
}

// ✅ Input
$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';
$confirm  = $_POST['confirm_password'] ?? '';

// ✅ Validation
if (empty($username) || empty($password) || empty($confirm)) {
    response(["message" => "All fields are required"], "error", 400);
}
if ($password !== $confirm) {
    response(["message" => "Passwords do not match"], "error", 400);
}

// ✅ Check duplicate username
$stmt = $conn->prepare("SELECT id FROM admin_login WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    response(["message" => "Username already exists"], "error", 409);
}
$stmt->close();

// ✅ Hash password
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// ✅ Insert new admin
$stmt = $conn->prepare("INSERT INTO admin_login (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashedPassword);

if ($stmt->execute()) {
    response([
        "message" => "Admin added successfully!",
        "id"      => $stmt->insert_id
    ], "success");
} else {
    response(["message" => "Failed to add admin: " . $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
