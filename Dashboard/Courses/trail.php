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
$host = 'localhost';
$db = 'my_database';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Collect form data
        $title = $_POST['title'] ?? '';
        $introduction = $_POST['introduction'] ?? '';
        $explaination = $_POST['explaination'] ?? '';
        $content_description = $_POST['content_description'] ?? '';
        $firstplan = $_POST['firstplan'] ?? '';
        $secondplan = $_POST['secondplan'] ?? '';
        $thirdplan = $_POST['thirdplan'] ?? '';
        $questions = $_POST['questions'] ?? '';
    }
    if (isset($_FILES['video']) && $_FILES['video']['error'] === UPLOAD_ERR_OK) {
        // Validate the uploaded file
        $videoInfo = pathinfo($_FILES['video']['name']);
        $allowedTypes = ['mp4', 'webm', 'ogg'];
        $fileExtension = strtolower($videoInfo['extension']);
        
        if (!in_array($fileExtension, $allowedTypes)) {
            die("Only MP4, WebM, and OGG video formats are allowed.");
        }
    
        // Validate file size (limit to 10MB)
        if ($_FILES['video']['size'] > 10 * 1024 * 1024) { // 10MB
            die("Video file size exceeds 10MB.");
        }
    
        // Generate a unique filename
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
    
        $uniqueName = time() . '_' . basename($_FILES['video']['name']);
        $targetFile = $uploadDir . $uniqueName;
    
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['video']['tmp_name'], $targetFile)) {
            // Save the video path to the database
            $stmt = $pdo->prepare("
                INSERT INTO courses (title, introduction, explaination, content_description, firstplan, secondplan, thirdplan, questions, image) 
                VALUES (:title, :introduction, :explaination, :content_description, :firstplan, :secondplan, :thirdplan, :questions, :video)
            ");
            try {
                $stmt->execute([
                    'title' => htmlspecialchars($title),
                    'introduction' => htmlspecialchars($introduction),
                    'explaination' => htmlspecialchars($explaination),
                    'content_description' => htmlspecialchars($content_description),
                    'firstplan' => htmlspecialchars($firstplan),
                    'secondplan' => htmlspecialchars($secondplan),
                    'thirdplan' => htmlspecialchars($thirdplan),
                    'questions' => htmlspecialchars($questions),
                    'video' => $targetFile, // Save video path
                ]);
                echo "<div style='color: green;'>Course added successfully with video!</div>";
            } catch (PDOException $e) {
                echo "Database Error: " . $e->getMessage();
            }
        } else {
            echo "Failed to upload the video.";
        }
    } else {
        echo "Error uploading video.";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Course</title>
    <link rel="stylesheet" href="course.css">
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Add Course</h1>
        <label for="title">Course Title:</label><br>
        <input type="text" name="title" id="title" required><br><br>

        <label for="introduction">Course Description:</label><br>
        <textarea name="introduction" id="introduction" rows="4" required></textarea><br><br>

        <label for="explaination">Objective:</label><br>
        <textarea name="explaination" id="explaination" rows="4" required></textarea><br><br>

        <label for="content_description">Course Duration:</label><br>
        <textarea name="content_description" id="content_description" rows="4" required></textarea><br><br>
        
        
        <label for="firstplan">1 month plan:</label><br>
        <textarea name="firstplan" id="firstone" rows="4" required></textarea><br><br>
        <label for="secondplan">part payment plan :</label><br>
        <textarea name="secondplan" id="secondone" rows="4" required></textarea><br><br>
        <label for="thirdplan">Full payment plan :</label><br>
        <textarea name="thirdplan" id="thirdone" rows="4" required></textarea><br><br>
 
        <label for="questions">Questions:</label><br>
        <textarea name="questions" id="questions" rows="4" required></textarea><br><br>

        <label for="image">Course Image:</label><br>
        <input type="file" name="image" id="image" accept="image/*" required><br><br>

        <button type="submit">Add Course</button>
    </form>
</body>
</html>
