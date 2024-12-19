<?php
// Start the session
session_start();

// Database connection
$host = 'localhost';
$db = 'my_database';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['emailInput'];
    $password = $_POST['passwordInput'];

    // Fetch the user from the database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND status = 1");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Password matches, set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['loggedin'] = true;

        // Check if the user is an admin
        if ($user['role'] === 'admin') {
            $_SESSION['is_admin'] = true; // Set is_admin session variable
            // Redirect to the admin dashboard
            echo "<script>alert('Welcome Admin!'); window.location.href='/Ogalearn-Project/Dashboard/dashboard.php';</script>";
        } else {
            $_SESSION['is_admin'] = false;
            // Redirect to the regular user dashboard
            echo "<script>alert('You have been Logged In.'); window.location.href='/Ogalearn-Project/Dashboard/dashboard.php';</script>";
        }
        exit();
    } else {
        // Login failed, redirect back to the login form with an error
        echo "<script>alert('Invalid Email Address Or Wrong Password'); window.location.href='/Ogalearn-Project/Navbar/Log/log.php';</script>";
    }
}
?>
