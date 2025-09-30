<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$sql = "SELECT YEAR(complaint_date) as year,
        COUNT(*) as received,
        SUM(CASE WHEN status = 'Resolved' THEN 1 ELSE 0 END) as resolved,
        SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) as pending
    FROM complaints
    GROUP BY YEAR(complaint_date)";

$result = $conn->query($sql);

// --- Put query results into associative array ---
$rows = [];
while ($row = $result->fetch_assoc()) {
    $rows[$row["year"]] = [
        "year"            => (int)$row["year"],
        "carried_forward" => 0,
        "received"        => (int)$row["received"],
        "resolved"        => (int)$row["resolved"],
        "pending"         => (int)$row["pending"]
    ];
}

// --- Fixed start year ---
$startYear = 2025;
// --- End year = current year ---
$endYear = (int)date("Y");

// --- Build final dataset ---
$data = [];
for ($y = $startYear; $y <= $endYear; $y++) {
    if (isset($rows[$y])) {
        $data[] = $rows[$y];
    } else {
        $data[] = [
            "year"            => $y,
            "carried_forward" => 0,
            "received"        => 0,
            "resolved"        => 0,
            "pending"         => 0
        ];
    }
}

// --- Sort descending by year (latest first) ---
usort($data, function ($a, $b) {
    return $b["year"] - $a["year"];
});

response($data, "success");
