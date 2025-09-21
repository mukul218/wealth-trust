<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Send email using GoDaddy Local Relay
 *
 * @param string|array $to       Recipient email(s) (string or array)
 * @param string       $subject  Email subject
 * @param string       $bodyHtml HTML body content
 * @param string       $bodyAlt  Optional plain text fallback
 * @return bool
 */
function sendMail($to, $subject, $bodyHtml, $bodyAlt = '')
{
    $mail = new PHPMailer(true);

    try {
        echo "<pre>--- DEBUG: Initializing Mail ---\n</pre>";

        // --- GoDaddy Economy Hosting Local Relay ---
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

        // Sender
        $mail->setFrom('admin@wealthtrustcap.com', 'WealthTrust');
        $mail->addReplyTo('admin@wealthtrustcap.com', 'WealthTrust');

        // Recipients (accepts string or array)
        if (is_array($to)) {
            foreach ($to as $recipient) {
                $mail->addAddress($recipient);
                echo "<pre>Added recipient: {$recipient}</pre>";
            }
        } else {
            $mail->addAddress($to);
            echo "<pre>Added recipient: {$to}</pre>";
        }

        echo "<pre>Subject: {$subject}</pre>";

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

/**
 * Load and parse an email template file
 *
 * @param string $templateFile File name in mail_templates directory
 * @param array  $data         Key-value pairs to replace in template
 * @return string
 */
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
