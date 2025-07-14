<?php
session_start();
if (!isset($_SESSION['admin'])) {
    echo json_encode(['status' => 'error', 'message' => 'Unauthorized']);
    exit;
}

include_once "../database/config.php"; // Include database configuration

$id = intval($_POST['id']);
$stmt = $conn->prepare("DELETE FROM blogs WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Blog deleted successfully']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to delete blog']);
}
