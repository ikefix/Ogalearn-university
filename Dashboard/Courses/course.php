<?php
// Start the session
session_start();


// Check if user data exists in the session
if (isset($_SESSION['email'])) {
    $fullEmail = $_SESSION['email'];
    // Extract username by splitting the email at the '@' symbol
    $userName = explode('@', $fullEmail)[0]; // Gets the part before '@'
} else {
    // Redirect to login if not logged in
    echo "<script>alert('Sign Up Or Log In To Access Our Programs'); window.location.href='/Ogalearn-Project/Navbar/Sign/sign.php';</script>";
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

    // Fetch courses from the database
    $stmt = $pdo->query("SELECT * FROM courses");
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="/Ogalearn-Project/Dashboard/Dashboard.css">
    <link rel="stylesheet" href="course.css">
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
        <div class="container">
            <div class="course-container">
                <div class="upload">
                    <h1>Available Courses</h1>
                
                    <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
                    <!-- Upload Courses button, visible only to admins -->
                    <a href="/Ogalearn-Project/Dashboard/Courses/trail.php"><button>Upload Courses</button></a>
                    <?php endif; ?>
                </div>
                <div class="course-list">
                    <?php if ($courses): ?>
                        <?php foreach ($courses as $course): ?>
                            <div class="course-box">
                                <img src="<?php echo htmlspecialchars($course['image']); ?>" alt="Course Image" class="course-image">
                                <h3><strong><?php echo htmlspecialchars($course['title']); ?></strong></h3>
                                <p><strong>Introduction:</strong><?php echo htmlspecialchars(substr($course['introduction'], 0, 50)) . '...'; ?></p>
                                <button onclick="showCourseDetail(<?php echo htmlspecialchars(json_encode($course)); ?>)">Read More</button>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No courses available at this time.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Modal for course detail -->
            <div id="courseDetailModal" class="course-detail">
                <div class="course-content">
                    
                <img src="<?php echo htmlspecialchars($course['image']); ?>" alt="Course Image" class="course-image">
                    <h2 id="courseTitle"></h2><br>
                    <p id="courseIntroduction"></p><br>
                    <p id="courseExplanation"></p><br>
                    <p id="courseContentDescription"></p><br>
                    <p id="courseFirstone"></p><br>
                    <p id="courseSecondone"></p><br>
                    <p id="courseThirdone"></p><br>
                    <p id="courseObjectives"></p><br>
                    <p id="courseQuestions"></p><br>
                    <div>
                        <button onclick="closeCourseDetail()">Close</button>
                        <a href="/Ogalearn-Project/Pay/pay.php"><button>Enroll</button></a>
                    </div>
                </div>
            </div>
        </div>
    <script>

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


function showCourseDetail(course) {
    // Populate modal with course details
    document.getElementById('courseTitle').textContent = course.title;
    document.getElementById('courseIntroduction').innerHTML = "<strong>Course Description:</strong> " + course.introduction;
    document.getElementById('courseExplanation').innerHTML = "<strong>Course Objective:</strong> " + course.explaination;
    document.getElementById('courseContentDescription').innerHTML = "<strong>Course Duration:</strong> " + course.content_description;

    // Payment plans
    document.getElementById('courseFirstone').innerHTML = "<strong>1 Month Plan:</strong> " + course.firstplan;
    document.getElementById('courseSecondone').innerHTML = "<strong>Part Payment Plan:</strong> " + course.secondplan;
    document.getElementById('courseThirdone').innerHTML = "<strong>Full Payment Plan:</strong> " + course.thirdplan;

    document.getElementById('courseQuestions').innerHTML = "<strong>Questions:</strong> " + course.questions;

    // Show the modal
    document.getElementById('courseDetailModal').style.display = 'flex';
}


    </script>
</body>
</html>