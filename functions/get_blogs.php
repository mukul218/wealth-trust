<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$debug_messages = [];

$debug_messages[] = "STEP 1: Script started";

include_once "../database/config.php";

if (!$conn || $conn->connect_error) {
    $debug_messages[] = "STEP 2: DB connection failed";
    die(json_encode([
        'status' => 'error',
        'message' => 'DB connection failed',
        'db_error' => $conn ? $conn->connect_error : 'No connection object',
        'debug' => $debug_messages
    ]));
}

$debug_messages[] = "STEP 2: DB connected successfully";

$isAdmin = isset($_GET['admin']) && $_GET['admin'] === '1';
$debug_messages[] = "STEP 3: isAdmin=" . ($isAdmin ? 'true' : 'false');

$query = $isAdmin
    ? "SELECT * FROM blogs ORDER BY created_at DESC"
    : "SELECT * FROM blogs WHERE is_published = 1 ORDER BY created_at DESC";

$debug_messages[] = "STEP 4: Running query → $query";

$result = $conn->query($query);

if (!$result) {
    $debug_messages[] = "STEP 5: Query failed";
    die(json_encode([
        'status'   => 'error',
        'sql'      => $query,
        'db_error' => $conn->error,
        'debug'    => $debug_messages
    ]));
}

$debug_messages[] = "STEP 5: Query executed successfully, rows=" . $result->num_rows;

$blogs = [];
while ($row = $result->fetch_assoc()) {
    $blogs[] = $row;
}

$debug_messages[] = "STEP 6: Blogs fetched=" . count($blogs);
$debug_messages[] = "STEP 7: Preparing JSON output";

// Final JSON response only
echo json_encode([
    'status' => 'success',
    'data'   => $blogs,
    'debug'  => $debug_messages
], JSON_PRETTY_PRINT);
