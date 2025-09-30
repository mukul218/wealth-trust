<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$month = date("m");
$year  = date("Y");

// Define all sources manually
$allSources = ["Investors", "Others", "SEBI (Scores)"];

$sql = "SELECT source,
        SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) as total_pending,
        SUM(CASE WHEN status = 'Resolved' THEN 1 ELSE 0 END) as total_resolved
    FROM complaints
    WHERE MONTH(complaint_date) = ? AND YEAR(complaint_date) = ?
    GROUP BY source";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $month, $year);
$stmt->execute();
$result = $stmt->get_result();

// Save found sources
$found = [];
$data = [];
while ($row = $result->fetch_assoc()) {
    $found[] = $row["source"];
    $data[] = [
        "source"             => $row["source"],
        "pending_last_month" => 0,
        "received"           => 0,
        "resolved"           => (int)$row["total_resolved"],
        "total_pending"      => (int)$row["total_pending"],
        "pending_over_3m"    => 0,
        "avg_days"           => 0
    ];
}

// Add missing sources with 0
foreach ($allSources as $src) {
    if (!in_array($src, $found)) {
        $data[] = [
            "source"             => $src,
            "pending_last_month" => 0,
            "received"           => 0,
            "resolved"           => 0,
            "total_pending"      => 0,
            "pending_over_3m"    => 0,
            "avg_days"           => 0
        ];
    }
}

response($data, "success");
