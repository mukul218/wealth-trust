<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";
require_once __DIR__ . "/../../core/mailer.php";

// Input
$full_name = trim($_POST['name'] ?? '');
$email     = trim($_POST['email'] ?? '');
$contact   = trim($_POST['phone'] ?? '');
$city      = trim($_POST['city'] ?? '');
$message   = trim($_POST['message'] ?? '');

// Validation
if (empty($full_name) || empty($email) || empty($contact)) {
    response(["message" => "Name, email and phone are required"], "error", 400);
}

// Insert
$stmt = $conn->prepare("INSERT INTO contact_requests (full_name, email, contact, city, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $full_name, $email, $contact, $city, $message);

if ($stmt->execute()) {
    // Load email template
    $htmlBody = loadTemplate("contact_request.html", [
        "name"    => $full_name,
        "email"   => $email,
        "phone"   => $contact,
        "city"    => $city,
        "message" => $message
    ]);

    // Send notification
    sendMail(
        "enquiry@wealthtrustcap.com", // receiver
        "New Contact Request from $full_name",
        $htmlBody
    );

    response([
        "message" => "Contact request submitted successfully",
        "id"      => $stmt->insert_id
    ], "success");
} else {
    response(["message" => "Failed to save contact request", "db_error" => $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
