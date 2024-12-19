<?php
// Database connection
$pdo = new PDO('mysql:host=localhost;dbname=my_database', 'root', '');

// Fetch the blog by ID
$blogId = $_GET['id'] ?? null;
if ($blogId) {
    $stmt = $pdo->prepare("SELECT * FROM blogs WHERE id = :id");
    $stmt->bindParam(':id', $blogId, PDO::PARAM_INT);
    $stmt->execute();
    $blog = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($blog['title']); ?></title>
</head>
<style>
    a{
        text-decoration: none;
        cursor: pointer;
        color: purple;
    }
</style>
<body>
    <?php if ($blog): ?>
        <h1><?php echo htmlspecialchars($blog['title']); ?></h1>
        <p><?php echo nl2br(htmlspecialchars($blog['content'])); ?></p>
        <a href="blog.php">Back to Blog List</a>
    <?php else: ?>
        <p>Blog not found.</p>
    <?php endif; ?>
</body>
</html>
