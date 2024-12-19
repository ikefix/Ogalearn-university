<?php
include 'Checking.php';

// Define BASE_URL if not already defined
define('BASE_URL', 'http://localhost/Ogalearn-Project/');

if (!isset($_REQUEST['email']) || !isset($_REQUEST['token'])) {
    header('Location: ' . BASE_URL);
    exit;
}

$statement = $pdo->prepare("SELECT * FROM users WHERE email=? AND token=?");
$statement->execute([$_REQUEST['email'], $_REQUEST['token']]);
$total = $statement->rowCount();

if ($total) {
    $statement = $pdo->prepare("UPDATE users SET token=?, status=? WHERE email=? AND token=?");
    $statement->execute(['', 1, $_REQUEST['email'], $_REQUEST['token']]);

    $_SESSION['success_message'] = 'Registration verified successfully. Please login now.';
    header('Location: ' . BASE_URL . 'Navbar/Log/log.php');
    exit;
} else {
    // Log failed attempt for security audit
    $email = htmlspecialchars($_REQUEST['email']);
    $token = htmlspecialchars($_REQUEST['token']);
    error_log("Failed verification attempt for email: $email with token: $token", 3, 'error_log.txt');

    $_SESSION['error_message'] = 'Invalid or expired verification link.';
    header('Location: ' . BASE_URL . 'Navbar/Log/log.php');
    exit;
}
?>
