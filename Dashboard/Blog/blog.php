<?php

session_start();

// Check if user data exists in the session
if (isset($_SESSION['email'])) {
    $fullEmail = $_SESSION['email'];
    // Extract username by splitting the email at the '@' symbol
    $userName = explode('@', $fullEmail)[0]; // Gets the part before '@'
} else {
    // Redirect to login if not logged in
    echo "<script>alert('Sign Up Or Log In To Access Our Blogs'); window.location.href='/Ogalearn-Project/Navbar/Sign/sign.php';</script>";
    exit;
}

// Database connection
$pdo = new PDO('mysql:host=localhost;dbname=my_database', 'root', '');

// Fetch blogs
$stmt = $pdo->query("SELECT * FROM blogs");
$blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Ogalearn-Project/Dashboard/Dashboard.css">
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="responsive.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
        <aside id="sidenav">
            <div class="top">
                <div class="logo">
                    <img src="/Ogalearn-Project/assets/Wills charles (1).png" alt="Logo">
                    <a href="/Ogalearn-Project/Ogalearn.php"><h2><i>OGA<span class="learn">LEARN</span></i></h2></a>
                </div>
                <div id="toggleBtn">
                    <i class='bx bx-x'></i>
                </div>
            </div>
            <div id="nav">
                <a id="one" href="/Ogalearn-Project/Dashboard/Dashboard.php">
                    <i class='bx bxs-dashboard bx-tada' ></i>
                    <h3>Dashboard</h3>
                </a>
                <a href="/Ogalearn-Project/Dashboard/Courses/course.php">
                    <!-- <i class='bx bx-upload bx-tada' ></i> -->
                    <i class='bx bx-upload'></i>
                    <h3>Courses</h3>
                </a>
                <a href="/Ogalearn-Project/Dashboard/Blog/blog.php">
                    <!-- <i class='bx bx-book-bookmark bx-tada' ></i> -->
                    <i class='bx bx-book-bookmark'></i>
                    <h3>Blog</h3>
                </a>
                <a href="/Ogalearn-Project/Dashboard/Community/community.php">
                    <!-- <i class='bx bx-chalkboard bx-tada' ></i> -->
                    <i class='bx bx-chalkboard'></i>
                    <h3>Join  Community</h3>
                </a>
                <a href="/Ogalearn-Project/Dashboard/Jobs/jobs.php">
                    <!-- <i class='bx bxs-briefcase bx-tada' ></i> -->
                    <i class='bx bxs-briefcase'></i>
                    <h3>Jobs</h3>
                </a>
                <a href="/Ogalearn-Project/Dashboard/Messages/message.php">
                    <!-- <i class='bx bx-message-rounded-dots bx-tada' ></i> -->
                    <i class='bx bx-message-rounded-dots'></i>
                    <h3>Messages</h3>
                    <span class="message-count">30</span>
                </a>
                <a href="/Ogalearn-Project/Dashboard/Certificates/certificate.php">
                    <!-- <i class='bx bx-award bx-tada' ></i> -->
                    <i class='bx bx-award'></i>
                    <h3>Certificates</h3>
                </a>
                <a href="/Ogalearn-Project/Dashboard/Report/report.php">
                    <!-- <i class='bx bxs-report bx-tada' ></i> -->
                    <i class='bx bxs-report'></i>
                    <h3>Reports</h3>
                </a>
                <a href="/Ogalearn-Project/Dashboard/Settings/setting.php">
                    <!-- <i class='bx bx-cog bx-tada' ></i> -->
                    <i class='bx bx-cog' ></i>
                    <h3>Settings</h3>
                </a>
                <a href="/Ogalearn-Project/Dashboard/logout.php">
                    <!-- <i class='bx bxs-door-open bx-tada' ></i> -->
                    <i class='bx bxs-door-open'></i>
                    <h3>Log Out</h3>
                </a>
            </div>
        </aside>
        <div id="togglebutton">
            <i class='bx bx-menu'></i>
        </div>
        <div class="body">
            <div class="bodyset">
                <h1>Blog List</h1>
                
                <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
                <!-- Upload Courses button, visible only to admins -->
                <a href="/Ogalearn-Project/Dashboard/Blog/bog_save.php"><button>Upload Blog</button></a>
                <?php endif; ?>
            </div>
            <div class="blog-list">
                <?php foreach ($blogs as $blog): ?>
                    <div class="blog-item">
                    <h2 class="blog-title"><?php echo htmlspecialchars($blog['title']); ?></h2><br>
                    <button onclick="openBlog(<?php echo $blog['id']; ?>)">Open</button>
            </div>
            <?php endforeach; ?>
        </div>
    <script>

        function openBlog(blogId) {
            window.location.href = `blog_view.php?id=${blogId}`;
        }

        const sideMenu = document.getElementById("sidenav");
        const menuBtn = document.getElementById("togglebutton");
        const closeBtn = document.getElementById("toggleBtn");

        menuBtn.addEventListener("click", () => {
            sideMenu.style.display = "block";
        })

        closeBtn.addEventListener("click", () => {
        sideMenu.style.display = "none";
        })



        document.addEventListener('DOMContentLoaded', function() {
    const sidenavLinks = document.querySelectorAll('#nav a');

    // Add active class based on the current URL
    sidenavLinks.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('active');
        }
    });

    // Change the active class on click
    sidenavLinks.forEach(link => {
        link.addEventListener('click', function() {
            sidenavLinks.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        });
    });
});



document.addEventListener('DOMContentLoaded', function() {
    const sidenavLinks = document.querySelectorAll('#nav a');
    const currentPage = window.location.pathname; // Get the current page path

    // Loop through all the links
    sidenavLinks.forEach(link => {
        const icon = link.querySelector('i');
        const linkHref = link.getAttribute('href');

        // If the link's href matches the current page, add the 'bx-tada' class
        if (currentPage === linkHref) {
            icon.classList.add('bx-tada');
        } else {
            icon.classList.remove('bx-tada');
        }
    });
});

    </script>
</body>
</html>