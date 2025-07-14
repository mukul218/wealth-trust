<?php
// DB config (replace with your own credentials)
$host = 'localhost';
$db   = 'wealth-trust-db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB connection failed: " . $conn->connect_error);
}
