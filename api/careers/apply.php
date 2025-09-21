<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";
require_once __DIR__ . "/../../core/mailer.php";

// Input
$full_name   = trim($_POST['full_name'] ?? '');
$email       = trim($_POST['email'] ?? '');
$contact     = trim($_POST['contact'] ?? '');
$description = trim($_POST['description'] ?? '');

// Validation
if (empty($full_name) || empty($email) || empty($contact)) {
    response(["message" => "Full name, email and contact are required"], "error", 400);
}

// File upload handling
$resumePath = null;
if (!empty($_FILES['resume']['name'])) {
    $uploadDir = __DIR__ . "/../../uploads/resumes/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $fileName = time() . "_" . basename($_FILES['resume']['name']);
    $target   = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['resume']['tmp_name'], $target)) {
        $resumePath = "uploads/resumes/" . $fileName;
    } else {
        response(["message" => "Failed to upload resume"], "error", 500);
    }
}

// Insert into DB
$stmt = $conn->prepare("INSERT INTO career_requests (full_name, email, contact, description, resume) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $full_name, $email, $contact, $description, $resumePath);

if ($stmt->execute()) {
    // Load email template
    $htmlBody = loadTemplate("career_request.html", [
        "name"        => $full_name,
        "email"       => $email,
        "contact"     => $contact,
        "description" => $description,
        "resume"      => $resumePath
    ]);

    // Send notification
    sendMail(
        "hr@wealthtrustcap.com",
        "New Career Application from $full_name",
        $htmlBody
    );

    response([
        "message" => "Application submitted successfully",
        "id"      => $stmt->insert_id
    ], "success");
} else {
    response(["message" => "Failed to save application", "db_error" => $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
