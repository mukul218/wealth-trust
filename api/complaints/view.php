<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$id = intval($_GET['id'] ?? 0);

if ($id <= 0) {
    response(["message" => "Invalid complaint ID"], "error", 400);
}

$stmt = $conn->prepare("SELECT 
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
    FROM complaints WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $complaint = $result->fetch_assoc();
        response($complaint, "success");
    } else {
        response(["message" => "Complaint not found"], "error", 404);
    }
} else {
    response(["message" => "Database error", "db_error" => $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
