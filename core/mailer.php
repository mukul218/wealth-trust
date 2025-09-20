<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

function sendMail($to, $subject, $bodyHtml, $bodyAlt = '')
{
    $env = parse_ini_file(__DIR__ . '/../.env');
    $mail = new PHPMailer(true);
    try {
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

        // Mail config from env
        $mail->Host       = $env['MAIL_HOST'];       // e.g. smtp.secureserver.net
        $mail->SMTPAuth   = true;
        $mail->Username   = $env['MAIL_USERNAME'];   // e.g. admin@wealthtrustcap.com
        $mail->Password   = $env['MAIL_PASSWORD'];   // e.g. your password
        $mail->SMTPSecure = $env['MAIL_ENCRYPTION']; // e.g. tls
        $mail->Port       = $env['MAIL_PORT'];       // e.g. 587



        // Sender & Receiver
        $mail->setFrom('mukultiwari218@gmail.com', 'WealthTrust Test');
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
