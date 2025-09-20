<?php
die( " here to get the data");


include_once "../database/config.php"; // Include database configuration


$isAdmin = isset($_GET['admin']) && $_GET['admin'] === '1';

// Fetch all blogs if admin, else only published
$query = $isAdmin
    ? "SELECT * FROM blogs ORDER BY created_at DESC"
    : "SELECT * FROM blogs WHERE is_published = 1 ORDER BY created_at DESC";

// $result = $conn->query($query);

$result = $conn->query($query) or die(json_encode([
    'status' => 'error',
    'sql' => $query,
    'db_error' => $conn->error
]));


$blogs = [];
while ($row = $result->fetch_assoc()) {
    $blogs[] = $row;
}

header('Content-Type: application/json');
echo json_encode(['status' => 'success', 'data' => $blogs]);
