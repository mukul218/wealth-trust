<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

// Input
$date             = trim($_POST['complaint_date'] ?? '');
$source           = trim($_POST['source'] ?? '');
$complainant_name = trim($_POST['complainant_name'] ?? '');
$contact_info     = trim($_POST['contact_info'] ?? '');
$category         = trim($_POST['category'] ?? '');
$description      = trim($_POST['description'] ?? '');
$priority         = trim($_POST['priority'] ?? 'Medium');
$status           = trim($_POST['status'] ?? 'Pending');
$assigned_to      = trim($_POST['assigned_to'] ?? '');
$resolution_notes = trim($_POST['resolution_notes'] ?? '');
$resolved_at      = !empty($_POST['resolved_at']) ? $_POST['resolved_at'] : null;

// Validation
if (empty($date) || empty($source) || empty($description)) {
    response(["message" => "Complaint date, source and description are required"], "error", 400);
}

// Insert Query
$stmt = $conn->prepare("INSERT INTO complaints 
    (complaint_date, source, complainant_name, contact_info, category, description, priority, status, assigned_to, resolution_notes, resolved_at) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param(
    "sssssssssss",
    $date,
    $source,
    $complainant_name,
    $contact_info,
    $category,
    $description,
    $priority,
    $status,
    $assigned_to,
    $resolution_notes,
    $resolved_at
);

if ($stmt->execute()) {
    response([
        "message" => "Complaint added successfully",
        "id" => $stmt->insert_id
    ], "success");
} else {
    response([
        "message" => "Failed to save complaint",
        "db_error" => $stmt->error
    ], "error", 500);
}

$stmt->close();
$conn->close();
