<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$sql = "SELECT DATE_FORMAT(complaint_date, '%b %Y') as month,
        COUNT(*) as received,
        SUM(CASE WHEN status = 'Resolved' THEN 1 ELSE 0 END) as resolved,
        SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) as pending
    FROM complaints
    GROUP BY YEAR(complaint_date), MONTH(complaint_date)
    ORDER BY YEAR(complaint_date), MONTH(complaint_date)";

$result = $conn->query($sql);

// --- Put query results into associative array ---
$rows = [];
while ($row = $result->fetch_assoc()) {
    $rows[$row["month"]] = [
        "month"           => $row["month"],
        "carried_forward" => 0,
        "received"        => (int)$row["received"],
        "resolved"        => (int)$row["resolved"],
        "pending"         => (int)$row["pending"]
    ];
}

// --- Fixed start date (Sep 2025) ---
$startDate = new DateTime("2025-06-01");

// --- End date = current month ---
$endDate = new DateTime(date("Y-m-01"));

// --- Loop month by month and build dataset ---
$data = [];
$current = clone $startDate;

while ($current <= $endDate) {
    $monthLabel = $current->format("M Y");

    if (isset($rows[$monthLabel])) {
        $data[] = $rows[$monthLabel];
    } else {
        $data[] = [
            "month"           => $monthLabel,
            "carried_forward" => 0,
            "received"        => 0,
            "resolved"        => 0,
            "pending"         => 0
        ];
    }

    $current->modify("+1 month");
}

// --- Reverse order: Sep first, then back in time ---
$data = array_reverse($data);

response($data, "success");
