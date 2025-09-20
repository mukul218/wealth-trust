<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "we are here";
include_once "../database/config.php"; // Include database configuration

if (!$conn || $conn->connect_error) {
    die(json_encode([
        'status' => 'error',
        'message' => 'DB connection failed',
        'db_error' => $conn ? $conn->connect_error : 'No connection object'
    ]));
}


echo "now rere";
$isAdmin = isset($_GET['admin']) && $_GET['admin'] === '1';

// Fetch all blogs if admin, else only published
$query = $isAdmin
    ? "SELECT * FROM blogs ORDER BY created_at DESC"
    : "SELECT * FROM blogs WHERE is_published = 1 ORDER BY created_at DESC";

// Run query
$result = $conn->query($query);

if (!$result) {
    die(json_encode([
        'status'   => 'error',
        'sql'      => $query,
        'db_error' => $conn->error
    ]));
}

$blogs = [];
while ($row = $result->fetch_assoc()) {
    $blogs[] = $row;
}

// Debug info
$debug = [
    'db_host' => $conn->host_info,
    'db_name' => $conn->query("SELECT DATABASE()")->fetch_row()[0],
    'rows_found' => $result->num_rows,
    'is_admin' => $isAdmin,
    'query' => $query
];

return json_encode([
    'status' => 'success',
    'data'   => $blogs,
    'debug'  => $debug
], JSON_PRETTY_PRINT);
