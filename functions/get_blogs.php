<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "../database/config.php";

if (!$conn || $conn->connect_error) {
    echo json_encode([
        'status' => 'error',
        'message' => 'DB connection failed',
        'db_error' => $conn ? $conn->connect_error : 'No connection object'
    ]);
    exit;
}

$isAdmin = isset($_GET['admin']) && $_GET['admin'] === '1';

$query = $isAdmin
    ? "SELECT * FROM blogs ORDER BY created_at DESC"
    : "SELECT * FROM blogs WHERE is_published = 1 ORDER BY created_at DESC";

$result = $conn->query($query);

if (!$result) {
    echo json_encode([
        'status'   => 'error',
        'sql'      => $query,
        'db_error' => $conn->error
    ]);
    exit;
}

$blogs = [];
while ($row = $result->fetch_assoc()) {
    // Fix encoding issues row by row
    $row = array_map(function ($value) {
        return is_string($value) ? mb_convert_encoding($value, 'UTF-8', 'UTF-8') : $value;
    }, $row);

    $blogs[] = $row;
}

$response = [
    'status' => 'success',
    'data'   => $blogs
];

$json = json_encode($response, JSON_PRETTY_PRINT);

if ($json === false) {
    echo "FINAL JSON ERROR: " . json_last_error_msg();
    exit;
}

header('Content-Type: application/json; charset=utf-8');
echo $json;
exit;
