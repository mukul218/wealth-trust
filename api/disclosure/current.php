<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$month = date("m");
$year  = date("Y");

// Example: calculate pending, received, resolved etc.
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

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = [
        "source"            => $row["source"],
        "pending_last_month" => 0, // needs previous month calc
        "received"          => 0, // can add logic if required
        "resolved"          => (int)$row["total_resolved"],
        "total_pending"     => (int)$row["total_pending"],
        "pending_over_3m"   => 0,
        "avg_days"          => 0
    ];
}

response($data, "success");
