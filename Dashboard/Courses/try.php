<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>

<?php
// Include the database connection file
include("Checking.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email and password from the POST request
    $email = $_POST['emailInput'];
    $password = $_POST['passwordInput'];

    // Check if the email already exists in the database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // If email already exists, show the message
    if ($stmt->rowCount() > 0) {
        echo "<script>alert('This email has already been used to create an account.');</script>";
        echo "<script>window.location.href = '/Ogalearn-Project/Navbar/Sign/sign.php';</script>";
    } else {
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL statement to insert the new user
        $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");

        // Bind parameters
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);

        // Execute the statement
        if ($stmt->execute()) {

            echo "<script>alert('Your Account has been Successfully Created.');</script>";
            echo "<script>alert('Check your email to verify your account.');</script>";
            echo "<script>window.location.href = '/Ogalearn-Project/Navbar/Log/log.php';</script>";
            exit;
        }
    }
}
?>
</body>
</html>






















































