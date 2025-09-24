<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once __DIR__ . "/../../core/config.php";
include_once __DIR__ . "/../../core/helpers.php";

// Check DB connection
if (!$conn || $conn->connect_error) {
    response([
        'message'  => 'DB connection failed',
        'db_error' => $conn ? $conn->connect_error : 'No connection object'
    ], 'error', 500);
}

// Admin vs published filter
$isAdmin = isset($_GET['admin']) && $_GET['admin'] === '1';

$query = $isAdmin
    ? "SELECT * FROM blogs ORDER BY created_at DESC"
    : "SELECT * FROM blogs WHERE is_published = 1 ORDER BY created_at DESC";

// Execute query
$result = $conn->query($query);

if (!$result) {
    response([
        'sql'      => $query,
        'db_error' => $conn->error
    ], 'error', 500);
}

// Collect blogs
$blogs = [];
while ($row = $result->fetch_assoc()) {
    $blogs[] = $row;
}

// ✅ Send response
response($blogs);
