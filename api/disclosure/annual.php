<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$sql = "SELECT YEAR(complaint_date) as year,
        COUNT(*) as received,
        SUM(CASE WHEN status = 'Resolved' THEN 1 ELSE 0 END) as resolved,
        SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) as pending
    FROM complaints
    GROUP BY YEAR(complaint_date)
    ORDER BY YEAR(complaint_date) DESC";

$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = [
        "year"            => $row["year"],
        "carried_forward" => 0, // optional calc
        "received"        => (int)$row["received"],
        "resolved"        => (int)$row["resolved"],
        "pending"         => (int)$row["pending"]
    ];
}

response($data, "success");
