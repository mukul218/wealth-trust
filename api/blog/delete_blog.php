<?php
session_start();

include_once __DIR__ . "/../../core/config.php";
include_once __DIR__ . "/../../core/helpers.php";

// --- Check admin session ---
if (!isset($_SESSION['admin'])) {
    response(['message' => 'Unauthorized'], 'error', 403);
}

// --- Validate input ---
if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
    response(['message' => 'Invalid or missing blog ID'], 'error', 400);
}

$id = intval($_POST['id']);

// --- Prepare and execute query ---
$stmt = $conn->prepare("DELETE FROM blogs WHERE id = ?");
if (!$stmt) {
    response(['message' => 'Prepare failed', 'db_error' => $conn->error], 'error', 500);
}

$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    response(['message' => 'Blog deleted successfully']);
} else {
    response(['message' => 'Failed to delete blog', 'db_error' => $stmt->error], 'error', 500);
}
