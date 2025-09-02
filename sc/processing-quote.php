<?php
include 'db_connect.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$name     = $_POST['txtName'] ?? '';
$email    = $_POST['txtEmail'] ?? '';
$phone    = $_POST['txtPhone'] ?? '';
$services = $_POST['txtServices'] ?? '';
$message  = $_POST['txtMessage'] ?? '';
$userId   = 0;

$stmt = $conn->prepare("INSERT INTO quote (`name`, `email`, `phone`, `services`, `message`) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone, $services, $message);

if ($stmt->execute()) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'webhosting2029.is.cc';
        $mail->SMTPAuth = true;
        $mail->Username = 'quote@domain.com';
        $mail->Password = 'Uniqueshop@121';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('contact@domain.com', 'UniqueShop');
        $mail->addAddress('' . $email);
        $mail->addReplyTo('' . $email);

        $mail->addCustomHeader('Precedence', 'bulk');
        $mail->addCustomHeader('X-Mailer', 'PHPMailer');
        $mail->addCustomHeader('List-Unsubscribe', '<mailto:unsubscribe@domain.com>');

        $mail->Subject = 'New Contact Message Received';
        $mail->isHTML(true);
        $mail->Body = "
                    <html>
                    <body>
                        <p>Quote Message</p>
                        <p>Sender Name: <strong>$name</strong></p>
                        <p>Email: <strong>$email</strong></p>
                        <p>Phone: <strong>$phone</strong></p>
                        <p>Services: <strong>$services</strong></p>
                        <p><strong>$message</strong></p>
                        <hr>
                        <p>If you did not request this code, please ignore this message.</p>
                        <br><br>
                        <p>Best regards,</p>
                        <p>Eagle I Group Team,</p>
                    </body>
                    </html>";
        $mail->AltBody = "Quote Message";
        if ($mail->send()) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
    } catch (Exception $e) {
        error_log("Mail Error: " . $mail->ErrorInfo);
    }
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
