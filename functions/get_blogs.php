<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "STEP 1: Script started<br>";

include_once "../database/config.php"; // Include database configuration

if (!$conn || $conn->connect_error) {
    echo "STEP 2: DB connection failed<br>";
    die(json_encode([
        'status' => 'error',
        'message' => 'DB connection failed',
        'db_error' => $conn ? $conn->connect_error : 'No connection object'
    ]));
}

echo "STEP 2: DB connected successfully<br>";

$isAdmin = isset($_GET['admin']) && $_GET['admin'] === '1';
echo "STEP 3: isAdmin = " . ($isAdmin ? 'true' : 'false') . "<br>";

// Fetch all blogs if admin, else only published
$query = $isAdmin
    ? "SELECT * FROM blogs ORDER BY created_at DESC"
    : "SELECT * FROM blogs WHERE is_published = 1 ORDER BY created_at DESC";

echo "STEP 4: Running query → $query <br>";

// Run query
$result = $conn->query($query);

if (!$result) {
    echo "STEP 5: Query failed<br>";
    die(json_encode([
        'status'   => 'error',
        'sql'      => $query,
        'db_error' => $conn->error
    ]));
}

echo "STEP 5: Query executed successfully, rows = " . $result->num_rows . "<br>";

$blogs = [];
while ($row = $result->fetch_assoc()) {
    $blogs[] = $row;
}

echo "STEP 6: Blogs fetched = " . count($blogs) . "<br>";

// Debug info
$debug = [
    'db_host' => $conn->host_info,
    'db_name' => $conn->query("SELECT DATABASE()")->fetch_row()[0],
    'rows_found' => $result->num_rows,
    'is_admin' => $isAdmin,
    'query' => $query
];

echo "STEP 7: Preparing JSON output<br>";

// Final response
header('Content-Type: application/json');
echo json_encode([
    'status' => 'success',
    'data'   => $blogs,
    'debug'  => $debug
], JSON_PRETTY_PRINT);
