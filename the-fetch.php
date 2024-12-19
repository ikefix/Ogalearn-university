<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Form</title>
    <link rel="stylesheet" href="sign.css">
</head>
<body>

<div class="form-container">
    <h2>Sign Up</h2>
    <form action="register.php" id="signUpForm" method="POST">
        <!-- Email input -->
        <input type="text" name="emailInput" id="emailInput" placeholder="Enter your email" required>
        <span class="error-message" id="emailError">Please include '@gmail.com' in your email.</span>

        <!-- Password input -->
        <input type="password" name="passwordInput" id="passwordInput" placeholder="Enter your password" pattern=".{8,}" title="Password must be at least 8 characters long" required>
        <span class="error-message" id="passwordError">Passwords do not match.</span>

        <!-- Confirm Password input -->
        <input type="password" id="confirmPasswordInput" placeholder="Confirm your password" required>

        <!-- Sign-up button -->
        <button type="submit">Register</button>
        <span class="neli"><span>Already Have An Account </span><a class="al-have" href="/Ogalearn-Project/Navbar/Log/log.php">Log In</a></span>
    </form>

    <!-- Verification Code Field -->


    <!-- Log-in button (Hidden until verification) -->

</div>

<script>
    document.getElementById('signUpForm').addEventListener('submit', function(event) {
        // Get the password and confirm password values
        const password = document.getElementById('passwordInput').value;
        const confirmPassword = document.getElementById('confirmPasswordInput').value;

        // Check if the passwords match
        if (password !== confirmPassword) {
            // Prevent form submission
            event.preventDefault();
            
            // Display error message
            document.getElementById('passwordError').style.display = 'inline'; // Show error message
        } else {
            // Hide the error message if the passwords match
            document.getElementById('passwordError').style.display = 'none';
        }
    });
</script>

</body>
</html>













































<?php
// Include the database connection file
include("Checking.php");
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
require 'path/to/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $email = $_POST['emailInput'];
    $password = $_POST['passwordInput'];
    $verificationCode = $_POST['verificationCode'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Store user details and verification code in the database
    $stmt = $pdo->prepare("INSERT INTO users (email, password, verification_code, is_verified) VALUES (:email, :password, :verification_code, 0)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':verification_code', $verificationCode);

    if ($stmt->execute()) {
        // Send the verification email
        $mail = new PHPMailer(true);

        try {
            // SMTP Configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io'; // Mailtrap SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'your_mailtrap_username'; // Mailtrap username
            $mail->Password = 'your_mailtrap_password'; // Mailtrap password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Email Settings
            $mail->setFrom('no-reply@yourwebsite.com', 'Your Website');
            $mail->addAddress($email); // User's email
            $mail->Subject = 'Email Verification';
            $mail->Body = "Your verification code is: $verificationCode";

            $mail->send();
            echo "Verification email sent successfully!";
            // Redirect to a confirmation page
            header("Location: confirmation.php");
            exit;
        } catch (Exception $e) {
            echo "Email could not be sent. Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>

