<?php
$servername = "localhost";
$username = "root";  // Adjust this if needed
$password = "";      // Add your password if you have one
$dbname = "my_database";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close the connection
$conn->close();
?>
