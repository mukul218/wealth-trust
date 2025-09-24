<?php
session_start();

require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// --- Input ---
$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if (empty($username) || empty($password)) {
    response(['message' => 'Please fill in all fields'], 'error', 400);
}

// --- Query ---
$stmt = $conn->prepare("SELECT id, username, password FROM admin_login WHERE username = ?");
if (!$stmt) {
    response(['message' => 'Prepare failed', 'db_error' => $conn->error], 'error', 500);
}

$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        // ✅ Store session info
        $_SESSION['admin']    = $user['username'];
        $_SESSION['admin_id'] = $user['id'];

        response([
            'message'  => 'Login successful',
            'username' => $user['username'],
            'id'       => $user['id']
        ], 'success');
    } else {
        response(['message' => 'Invalid password'], 'error', 401);
    }
} else {
    response(['message' => 'Username not found'], 'error', 404);
}

$stmt->close();
$conn->close();
