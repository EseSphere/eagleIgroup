<?php
require_once 'db_config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';



$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'webhosting2029.is.cc'; // Use your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'info@uniqueshop.cc'; // Your email
    $mail->Password = 'Uniqueshop@121'; // Use an App Password if required
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // More secure
    $mail->Port = 465; // Use 465 for SMTPS

    // Email Headers
    $mail->setFrom('info@uniqueshop.cc', 'UniqueShop');
    $mail->addAddress('' . $input_jobber); // Send to recipient
    $mail->addReplyTo('info@uniqueshop.cc');

    // Avoid spam filters by adding proper headers
    $mail->addCustomHeader('Precedence', 'bulk'); // Helps avoid spam classification
    $mail->addCustomHeader('X-Mailer', 'PHPMailer');
    $mail->addCustomHeader('List-Unsubscribe', '<mailto:unsubscribe@uniqueshop.cc>');

    // Email Subject & Content
    $mail->Subject = 'Your UniqueShop Authentication Code';
    $mail->isHTML(true); // Use HTML format
    $mail->Body = "
                                    <html>
                                    <body>
                                        <p>Dear User,</p>
                                        <p>Your authentication code is: <strong>$randomNumber</strong></p>
                                        <p>Please enter this code to complete your login.</p>
                                        <p>If you did not request this code, please ignore this message.</p>
                                        <br><br>
                                        <p>Best regards,</p>
                                        <p>UniqueShop Team,</p>
                                    </body>
                                    </html>";
    $mail->AltBody = "Your authentication code is: $randomNumber";

    // Send Email
    if ($mail->send()) {
        header("Location: ./authentication-code");
        exit();
    }
} catch (Exception $e) {
    error_log("Mail Error: " . $mail->ErrorInfo);
}
