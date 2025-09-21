<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

const BASE_URL = "./../..";

// Optional: Pagination params
$page     = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$limit    = isset($_GET['limit']) ? intval($_GET['limit']) : 20;
$offset   = ($page - 1) * $limit;

// Fetch total count
$totalResult = $conn->query("SELECT COUNT(*) as total FROM career_requests");
$totalRow = $totalResult->fetch_assoc();
$total = $totalRow['total'] ?? 0;

// Fetch paginated data
$stmt = $conn->prepare("SELECT id, full_name, email, contact, description, resume, created_at 
                        FROM career_requests 
                        ORDER BY created_at DESC 
                        LIMIT ? OFFSET ?");
$stmt->bind_param("ii", $limit, $offset);
$stmt->execute();
$result = $stmt->get_result();

$requests = [];
while ($row = $result->fetch_assoc()) {
    $requests[] = [
        "id"          => $row['id'],
        "full_name"   => $row['full_name'],
        "email"       => $row['email'],
        "contact"     => $row['contact'],
        "description" => $row['description'],
        "resume"      => $row['resume'] ? BASE_URL . "/" . $row['resume'] : null,
        "created_at"  => $row['created_at']
    ];
}

response([
    "message" => "Career requests fetched successfully",
    "total"   => $total,
    "page"    => $page,
    "limit"   => $limit,
    "data"    => $requests
], "success");

$stmt->close();
$conn->close();
