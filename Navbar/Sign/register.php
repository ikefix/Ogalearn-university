<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Registration</title>
</head>
<body>
<?php
define('BASE_URL', 'http://localhost/Ogalearn-Project/'); // Define BASE_URL

// Include the database connection file
include("Checking.php");

// Manually include PHPMailer files
require 'C:\xampp\htdocs\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\PHPMailer-master\src\SMTP.php';
require 'C:\xampp\htdocs\PHPMailer-master\src\Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email and password from the POST request
    $email = filter_var($_POST['emailInput'], FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars($_POST['passwordInput'], ENT_QUOTES, 'UTF-8');

    // Check if the email already exists in the database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "<script>alert('This email has already been used to create an account.');</script>";
        echo "<script>window.location.href = 'http://localhost/Ogalearn-Project/Navbar/Sign/sign.php';</script>";
    } else {
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Generate a unique verification token
        $token = bin2hex(random_bytes(16));

        // Prepare the SQL statement to insert the new user
        $stmt = $pdo->prepare("INSERT INTO users (email, password, token, status) VALUES (:email, :password, :token, 0)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':token', $token);

        if ($stmt->execute()) {
            // Create the verification link
            // Correct the verification link generation
            $verificationLink = BASE_URL . 'Navbar/Sign/user-verify.php?email=' . urlencode($email) . '&token=' . urlencode($token);

            // Email content
            $emailMessage = 'Thank you for registering with Ogalearn University.<br>';
            $emailMessage .= 'Please click the link below to verify your account:<br>';
            $emailMessage .= '<a href="' . $verificationLink . '">' . $verificationLink . '</a>';

            // Send the email using PHPMailer
            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.mailtrap.io';  // Set the SMTP server to Mailtrap
                $mail->SMTPAuth = true;
                $mail->Username = '72252db7b4703c'; // Replace with your Mailtrap SMTP username
                $mail->Password = '339a54cb980eac'; // Replace with your Mailtrap SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 2525;  // Use Mailtrap's port

                // Recipients
                $mail->setFrom('support@ogalearn.com', 'Ogalearn University');  // Sender email
                $mail->addAddress($email);  // Recipient email

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Account Registration Confirmation';
                $mail->Body    = $emailMessage;

                $mail->send();

                echo "<script>alert('Registration completed. Please check your email to verify your account.');</script>";
                echo "<script>window.location.href = '/Ogalearn-Project/Navbar/Log/log.php';</script>";
            } catch (Exception $e) {
                echo "<script>alert('Error sending email: {$mail->ErrorInfo}');</script>";
            }
        } else {
            echo "<script>alert('Registration failed. Please try again later.');</script>";
        }
    }
}
?>
</body>
</html>
