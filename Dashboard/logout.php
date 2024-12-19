<?php
session_start(); // Start the session

// Destroy all session data
session_destroy(); 

// Optionally, you can clear the session array
$_SESSION = [];

// Output JavaScript to alert the user and then redirect
echo "<script>alert('You have been Logged Out.'); window.location.href='/Ogalearn-Project/Ogalearn.php';</script>";
exit();
?>

