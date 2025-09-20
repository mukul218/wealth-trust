<?php
// Load .env safely
$env = parse_ini_file(__DIR__ . '/../.env');

// DB config from .env
$host = $env['DB_HOST'] ?? 'localhost';
$db   = $env['DB_NAME'] ?? '';
$user = $env['DB_USER'] ?? '';
$pass = $env['DB_PASS'] ?? '';

$conn = new mysqli($host, $user, $pass, $db);

// Ensure charset is set
if (!$conn->set_charset("utf8mb4")) {
    die("Error setting charset: " . $conn->error);
}

// Handle connection errors
if ($conn->connect_error) {
    die("DB connection failed: " . $conn->connect_error);
}
