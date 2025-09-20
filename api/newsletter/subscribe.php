<?php
require_once __DIR__ . "/../../core/config.php";
require_once __DIR__ . "/../../core/helpers.php";
require_once __DIR__ . "/../../core/mailer.php";

// --- Input ---
$email = trim($_POST['email'] ?? '');

// --- Validation ---
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    response(["message" => "Invalid or missing email"], "error", 400);
}

// --- Check if already subscribed ---
$stmt = $conn->prepare("SELECT id FROM newsletter_subscriptions WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    response(["message" => "This email is already subscribed"], "error", 409);
}
$stmt->close();

// --- Insert subscriber ---
$stmt = $conn->prepare("INSERT INTO newsletter_subscriptions (email) VALUES (?)");
$stmt->bind_param("s", $email);

if ($stmt->execute()) {

    $htmlBody = loadTemplate("newsletter_subscription.html", [
        "email" => $email
    ]);

    sendMail("mukultiwari1802@gmail.com", "New Newsletter Subscriber", $htmlBody);

    response([
        "message" => "Subscribed successfully!",
        "id"      => $stmt->insert_id,
        "email"   => $email
    ], "success");
} else {
    response(["message" => "Failed to subscribe: " . $stmt->error], "error", 500);
}

$stmt->close();
$conn->close();
