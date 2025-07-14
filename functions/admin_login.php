<?php
session_start();
include_once "../database/config.php"; // Include database configuration

if ($conn->connect_error) {
    echo '<div class="alert alert-danger">Database connection failed!</div>';
    exit;
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($username) || empty($password)) {
    echo '<div class="alert alert-warning">Please fill in all fields.</div>';
    exit;
}

// Query the user
$stmt = $conn->prepare("SELECT password FROM admin_login WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $stmt->bind_result($storedPassword);
    $stmt->fetch();

    // Plain password check (no encryption)
    if ($password === $storedPassword) {
        $_SESSION['admin'] = $username;
        echo '<div class="alert alert-success">Login successful! Redirecting...</div>';
        // session_start(); $_SESSION['admin'] = $username;
        // echo '<script>setTimeout(() => window.location.href="dashboard.php", 2000);</script>';
    } else {
        echo '<div class="alert alert-danger">Invalid password.</div>';
    }
} else {
    echo '<div class="alert alert-danger">Username not found.</div>';
}

$stmt->close();
$conn->close();
