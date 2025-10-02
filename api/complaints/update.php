<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$id = intval($_POST['id'] ?? 0);
$date = trim($_POST['complaint_date'] ?? '');
$source = trim($_POST['source'] ?? '');
$complainant_name = trim($_POST['complainant_name'] ?? '');
$contact_info = trim($_POST['contact_info'] ?? '');
$category = trim($_POST['category'] ?? '');
$description = trim($_POST['description'] ?? '');
$priority = trim($_POST['priority'] ?? 'Medium');
$status = trim($_POST['status'] ?? 'Pending');
$assigned_to = trim($_POST['assigned_to'] ?? '');
$resolution_notes = trim($_POST['resolution_notes'] ?? '');
$resolved_at = !empty($_POST['resolved_at']) ? $_POST['resolved_at'] : null;

if ($id <= 0 || empty($date) || empty($source) || empty($description)) {
    response(["message" => "Required fields missing or invalid"], "error", 400);
}

$stmt = $conn->prepare("UPDATE complaints SET 
    complaint_date = ?, 
    source = ?, 
    complainant_name = ?, 
    contact_info = ?, 
    category = ?, 
    description = ?, 
    priority = ?, 
    status = ?, 
    assigned_to = ?, 
    resolution_notes = ?, 
    resolved_at = ? 
    WHERE id = ?");

$stmt->bind_param(
    "sssssssssssi",
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
    $resolved_at,
    $id
);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        response(["message" => "Complaint updated successfully"], "success");
    } else {
        response(["message" => "No changes made"], "success");
    }
} else {
    response(["message" => "Failed to update complaint", "db_error" => $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
