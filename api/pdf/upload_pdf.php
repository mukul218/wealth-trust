<?php
session_start();
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

if (!isset($_SESSION['admin'])) {
    response(["message" => "Unauthorized"], "error", 403);
}

$title = trim($_POST['title'] ?? '');

if (empty($title) || empty($_FILES['pdf']['name'])) {
    response(["message" => "Title and PDF are required"], "error", 400);
}

// Upload directory
$uploadDir = __DIR__ . "/../../uploads/pdfs/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$filename = time() . "_" . basename($_FILES['pdf']['name']);
$targetPath = $uploadDir . $filename;

if (move_uploaded_file($_FILES['pdf']['tmp_name'], $targetPath)) {
    $relativePath = "uploads/pdfs/" . $filename;

    $stmt = $conn->prepare("INSERT INTO pdf_files (title, file_path) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $relativePath);
    $stmt->execute();

    response(["message" => "PDF uploaded successfully", "id" => $stmt->insert_id], "success");
} else {
    response(["message" => "File upload failed"], "error", 500);
}
