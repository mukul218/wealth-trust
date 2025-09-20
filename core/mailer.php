<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

function sendMail($to, $subject, $bodyHtml, $bodyAlt = '')
{
    $env = parse_ini_file(__DIR__ . '/../.env');
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();

        if ($env['MAIL_DRIVER'] === 'relay') {
            // --- PRODUCTION: GoDaddy relay (no auth) ---
            $mail->Host       = $env['MAIL_HOST'] ?? 'localhost';
            $mail->Port       = $env['MAIL_PORT'] ?? 25;
            $mail->SMTPAuth   = false;
            $mail->SMTPSecure = false;
        } else {
            // --- DEV/TEST: Gmail or another SMTP ---
            $mail->Host       = $env['MAIL_HOST'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $env['MAIL_USERNAME'];
            $mail->Password   = $env['MAIL_PASSWORD'];
            $mail->SMTPSecure = $env['MAIL_ENCRYPTION'];
            $mail->Port       = $env['MAIL_PORT'];
        }

        // Sender & Receiver
        $mail->setFrom($env['MAIL_FROM'], $env['MAIL_FROM_NAME']);
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $bodyHtml;
        $mail->AltBody = $bodyAlt ?: strip_tags($bodyHtml);

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Mailer Error: {$mail->ErrorInfo}");
        return false;
    }
}


function loadTemplate($templateFile, $data = [])
{
    $templatePath = __DIR__ . "/mail_templates/" . $templateFile;
    if (!file_exists($templatePath)) {
        return '';
    }
    $content = file_get_contents($templatePath);
    foreach ($data as $key => $value) {
        $content = str_replace("{{{$key}}}", htmlspecialchars($value), $content);
    }
    return $content;
}
