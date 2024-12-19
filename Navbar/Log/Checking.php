<?php
// Database connection details
$host = 'localhost'; // or your server name
$dbname = 'my_database'; // replace with your database name
$username = 'root'; // replace with your database username
$password = ''; // replace with your database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage(); // error message
}

define("SMTP_HOST", "sandbox.smtp.mailtrap.io");
define("SMTP_PORT", "2525");
define("SMTP_USERNAME", "72252db7b4703c");
define("SMTP_PASSWORD", "339a54cb980eac");
define("SMTP_ENCRYPTION", "tls");
define("SMTP_FROM", "support@domus.com");
?>
