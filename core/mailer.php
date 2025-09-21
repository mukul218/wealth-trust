<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

function sendMail($to, $subject, $bodyHtml, $bodyAlt = '')
{
    $mail = new PHPMailer(true);

    try {
        echo "<pre>--- DEBUG: Initializing Mail ---\n</pre>";

        // --- GODADDY LOCAL RELAY (Economy Hosting) ---
        $mail->isSMTP();
        $mail->Host       = 'localhost';
        $mail->SMTPAuth   = false;
        $mail->Port       = 25;
        $mail->SMTPSecure = false; // no TLS/SSL

        echo "<pre>SMTP Config:
Host: {$mail->Host}
Port: {$mail->Port}
SMTPAuth: " . ($mail->SMTPAuth ? 'true' : 'false') . "
</pre>";

        // Sender & Recipient
        $mail->setFrom('admin@wealthtrustcap.com', 'WealthTrust');
        $mail->addAddress($to);
        $mail->addReplyTo('admin@wealthtrustcap.com', 'WealthTrust');

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
