<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$id = intval($_POST['id'] ?? 0);

if ($id <= 0) {
    response(["message" => "Invalid PDF ID"], "error", 400);
}

// Get file path before deleting
$stmt = $conn->prepare("SELECT file_path FROM pdf_files WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$pdf = $result->fetch_assoc();

if (!$pdf) {
    response(["message" => "PDF not found"], "error", 404);
}

$filePath = __DIR__ . "/../../" . $pdf['file_path'];

// Delete record
$stmt = $conn->prepare("DELETE FROM pdf_files WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    if (file_exists($filePath)) {
        unlink($filePath);
    }
    response(["message" => "PDF deleted successfully"], "success");
} else {
    response(["message" => "Failed to delete PDF"], "error", 500);
}
