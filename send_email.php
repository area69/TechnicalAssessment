<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure PHPMailer is installed

header("Content-Type: application/json"); // Ensure JSON response

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(["success" => false, "message" => "All fields are required."]);
        exit;
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Use your SMTP server (Gmail, SMTP2GO, etc.)
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email';  // Change this
        $mail->Password = 'gmail_password';     // Use an App Password (if using Gmail)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('your_email', 'Website Contact Form');
        $mail->addAddress('your_email'); // Change this to where you want to receive emails
        $mail->Subject = "New Contact Form Message from $name";
        $mail->Body = "Name: $name\nEmail: $email\nMessage:\n$message";

        if ($mail->send()) {
            echo json_encode(["success" => true, "message" => "Email sent successfully!"]);
        } else {
            echo json_encode(["success" => false, "message" => "Mail could not be sent."]);
        }
    } catch (Exception $e) {
        echo json_encode(["success" => false, "message" => "Mailer Error: " . $mail->ErrorInfo]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request."]);
}
?>
