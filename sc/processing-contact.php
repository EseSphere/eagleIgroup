<?php
include_once 'db_connect.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

if (!empty($name) && !empty($email)) {
    $sql = "INSERT INTO contact_messages (`name`, email, `subject`, `message`) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        if ($stmt->execute()) {

            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'webhosting2029.is.cc';
                $mail->SMTPAuth = true;
                $mail->Username = 'contact@domain.com';
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
                        <p>Contact Message</p>
                        <p>Subject: <strong>$subject</strong></p>
                        <p><strong>$message</strong></p>
                        <hr>
                        <p>If you did not request this code, please ignore this message.</p>
                        <br><br>
                        <p>Best regards,</p>
                        <p>Eagle I Group Team,</p>
                    </body>
                    </html>";
                $mail->AltBody = "Contact Message";
                if ($mail->send()) {
                    header("Location: ./contact");
                    exit();
                }
            } catch (Exception $e) {
                error_log("Mail Error: " . $mail->ErrorInfo);
            }
            exit();
        } else {
            echo "Execute failed: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Prepare failed: " . $conn->error;
    }
} else {
    echo "Name and Email are required fields.";
}

$conn->close();
