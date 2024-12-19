<?php
// Start the session
session_start();

// Ensure user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login if not logged in
    header("Location: /Ogalearn-Project/Navbar/Log/log.php");
    exit;
}

// Check if the user is an admin
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    // Display an unauthorized access message and exit
    echo "<h1>Unauthorized Access</h1>";
    echo "<p>Only admins can access this page.</p>";
    echo "<button onclick='history.back()' style='padding: 10px 20px; font-size: 16px; cursor: pointer;'>Go Back</button>";
    exit;
}

// Database connection
$pdo = new PDO('mysql:host=localhost;dbname=my_database', 'root', '');

// Save the blog
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $pdo->prepare("INSERT INTO blogs (title, content) VALUES (:title, :content)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);

    if ($stmt->execute()) {
        echo "Blog saved successfully!";
    } else {
        echo "Error saving the blog.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save Blog</title>
</head>
<body>
    <form action="bog_save.php" method="POST">
        <label for="title">Blog Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>
        
        <label for="content">Blog Content:</label><br>
        <textarea id="content" name="content" rows="5" cols="40" required></textarea><br><br>
        
        <button type="submit">Save Blog</button>
    </form>
</body>
</html>
