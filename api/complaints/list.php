<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// Fetch complaints
$sql = "SELECT 
            id, 
            complaint_date, 
            source, 
            complainant_name, 
            contact_info, 
            category, 
            description, 
            priority, 
            status, 
            assigned_to, 
            resolution_notes, 
            resolved_at, 
            created_at
        FROM complaints 
        ORDER BY complaint_date DESC";

$result = $conn->query($sql);

$complaints = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $complaints[] = $row;
    }
}

response([
    "complaints" => $complaints
], "success");

$conn->close();
