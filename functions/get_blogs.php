<?php
include_once "../database/config.php"; // Include database configuration

$isAdmin = isset($_GET['admin']) && $_GET['admin'] === '1';

// Fetch all blogs if admin, else only published
$query = $isAdmin
    ? "SELECT * FROM blogs ORDER BY created_at DESC"
    : "SELECT * FROM blogs WHERE is_published = 1 ORDER BY created_at DESC";

// Run query with error debug
$result = $conn->query($query) or die(json_encode([
    'status'   => 'error',
    'sql'      => $query,
    'db_error' => $conn->error
]));

$blogs = [];
while ($row = $result->fetch_assoc()) {
    $blogs[] = $row;
}

// Debug info (only for dev/testing)
$debug = [
    'db_host' => $conn->host_info,
    'db_name' => $conn->query("SELECT DATABASE()")->fetch_row()[0],
    'rows_found' => $result->num_rows,
    'is_admin' => $isAdmin,
    'query' => $query
];

// Final response
// header('Content-Type: application/json');
echo json_encode([
    'status' => 'success',
    'data'   => $blogs,
    'debug'  => $debug
], JSON_PRETTY_PRINT);
