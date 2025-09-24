<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";

$result = $conn->query("SELECT * FROM pdf_files ORDER BY created_at DESC");
$pdfs = [];

while ($row = $result->fetch_assoc()) {
    $pdfs[] = $row;
}

response(["pdfs" => $pdfs], "success");
