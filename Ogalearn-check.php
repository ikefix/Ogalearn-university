<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // If the user is logged in, redirect to the dashboard
    header("Location: /Ogalearn-Project/Dashboard/Dashboard.php");
    exit;
} else {
    // If the user is not logged in, display a message to log in or sign up
    // header("Location: /Ogalearn-Project/Navbar/Sign/sign.php");
    echo "<script>alert('Sign Up To Access Our Courses'); window.location.href='/Ogalearn-Project/Navbar/Sign/sign.php';</script>";
    exit;
}
?>