<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

function sendMail($to, $subject, $bodyHtml, $bodyAlt = '')
{
    $mail = new PHPMailer(true);
    $env = parse_ini_file(__DIR__ . '/../.env');

    try {
        echo "<pre>--- DEBUG: Initializing Mail ---\n</pre>";

        // --- TEST MODE (GMAIL) ---
        // $mail->isSMTP();
        // $mail->Host       = 'smtp.gmail.com';
        // $mail->SMTPAuth   = true;
        // $mail->Username   = 'mukultiwari218@gmail.com'; // Sender Gmail
        // $mail->Password   = 'vgol ygbl lqhu rphq';        // ⚠️ Use Gmail App Password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        // $mail->Port       = 587;

        // --- PRODUCTION MODE (GODADDY, uncomment later) ---
        $mail->isSMTP();
        $mail->Host       = 'localhost';
        $mail->SMTPAuth   = false;
        $mail->SMTPSecure = false;
        $mail->Port       = 25;



        // $mail->isSMTP();
        // $mail->Host       = 'smtpout.secureserver.net';
        // $mail->SMTPAuth   = true;
        // $mail->Username   = $env['MAIL_USERNAME'];
        // $mail->Password   = $env['MAIL_PASSWORD'];   // same as cPanel email pass
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // use SSL
        // $mail->Port       = 465;

        // Sender & Recipient
        $mail->setFrom('admin@wealthtrustcap.com', 'WealthTrust');
        // $mail->addAddress('enquiry@wealthtrustcap.com');   // official recipient
        $mail->addAddress('mukultiwari1802@gmail.com');   // test recipient
        $mail->addReplyTo('admin@wealthtrustcap.com', 'WealthTrust');


        echo "<pre>SMTP Config:
Host: {$mail->Host}
Port: {$mail->Port}
SMTPAuth: " . ($mail->SMTPAuth ? 'true' : 'false') . "
Username: {$mail->Username}
</pre>";

        // Sender & Receiver
        $mail->setFrom('admin@wealthtrustcap.com', 'WealthTrust Test');
        $mail->addAddress($to);

        echo "<pre>Sending mail to: {$to}\nSubject: {$subject}</pre>";

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $bodyHtml;
        $mail->AltBody = $bodyAlt ?: strip_tags($bodyHtml);

        $mail->send();

        echo "<pre>--- DEBUG: Mail Sent Successfully ---</pre>";
        return true;
    } catch (Exception $e) {
        echo "<pre>--- DEBUG: Mailer Error ---\n{$mail->ErrorInfo}\n</pre>";
        error_log("Mailer Error: {$mail->ErrorInfo}");
        return false;
    }
}

function loadTemplate($templateFile, $data = [])
{
    $templatePath = __DIR__ . "/mail_templates/" . $templateFile;
    if (!file_exists($templatePath)) {
        echo "<pre>--- DEBUG: Template not found: {$templatePath} ---</pre>";
        return '';
    }
    $content = file_get_contents($templatePath);
    echo "<pre>--- DEBUG: Loaded Template: {$templateFile} ---</pre>";
    foreach ($data as $key => $value) {
        echo "<pre>Replacing {{$key}} with {$value}</pre>";
        $content = str_replace("{{{$key}}}", htmlspecialchars($value), $content);
    }
    return $content;
}
