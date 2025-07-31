<?php
// If using Composer:
require 'vendor/autoload.php';
// If manual, use:
// require 'phpmailer/PHPMailer.php';
// require 'phpmailer/SMTP.php';
// require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'ravindu.w23@gmail.com'; // Your Gmail address
        $mail->Password   = 'kqzr yefs xerf bqwp'; // Gmail App Password (not your Gmail password)
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('ravindu.w23@gmail.com', 'Company'); // Your company email

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'Contact Form Submission';
        $mail->Body    = "Name: {$_POST['name']}\nEmail: {$_POST['email']}\nMessage:\n{$_POST['message']}";

        $mail->send();
        echo '<script>
            alert("Message sent! Redirecting...");
            window.location.href = "index.html#contact";
        </script>';
        exit();
    } catch (Exception $e) {
        echo '<script>
            alert("Message could not be sent. Please try again.");
            window.history.back();
        </script>';
        exit();
    }
}
?>
