<?php
session_start();

// Check if user data exists in the session
if (isset($_SESSION['email'])) {
    $fullEmail = $_SESSION['email'];
    // Extract username by splitting the email at the '@' symbol
    $userName = explode('@', $fullEmail)[0]; // Gets the part before '@'
} else {
    // Redirect to login if not logged in
    header("Location: /Ogalearn-Project/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="Dashboard.css">
    <link rel="stylesheet" href="responsive.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <aside id="sidenav">
            <div class="top">
                <div class="logo">
                    <img src="/Ogalearn-Project/assets/Wills charles (1).png" alt="Logo">
                    <a href="/Ogalearn-Project/Ogalearn.php"><h2><i>OGA<span class="learn">LEARN</span></i></h2></a>
                </div>
                <div class="close">
                    <span id="closebtn">&times;</span>
                </div>
            </div>
            <div id="nav">
                <a id="one" href="/Ogalearn-Project/Dashboard/Dashboard.php" class="active">
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
                <a href="logout.php">
                    <!-- <i class='bx bxs-door-open bx-tada' ></i> -->
                    <i class='bx bxs-door-open'></i>
                    <h3>Log Out</h3>
                </a>
            </div>
        </aside>
        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="track">
                    <i class='bx bx-line-chart'></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Course Duration</h3>
                            <h1>$50,000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="33"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- END OF  TRACK-->
                <div class="expenses">
                    <i class='bx bx-bar-chart'></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Amount Paid</h3>
                            <h1>$14,600</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="33"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    
                <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- END OF  EXPENSES-->
                <div class="income">
                    <i class='bx bx-credit-card'></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Course Paid</h3>
                            <h1>$50,000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="33"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div>
            <!-- END OF INSIGHTS -->
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course Number</th>
                            <th>Payment</th>
                            <th>Stasus</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Marketing & Finance</td>
                            <td>25</td>
                            <td>Transfer</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Marketing & Finance</td>
                            <td>25</td>
                            <td>Transfer</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Marketing & Finance</td>
                            <td>25</td>
                            <td>Transfer</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody>
                </table>
                <a href="">Show All</a>
            </div>
        </main>
        <!-- END OF MAIN -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <i class='bx bx-menu'></i>
                </button>
                <div class="theme-toggler">
                    <i class='bx bx-sun active'></i>
                    <i class='bx bxs-moon'></i>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b><?php echo htmlspecialchars($userName); ?></b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="/Ogalearn-Project/assets/Snapchat-1846730604.jpg" alt="Profile Picture" >
                    </div>
                </div>
            </div>
            <!-- END OF TOP -->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="/Ogalearn-Project/assets/peter.webp" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mr.Peter </b> Received his order of Marketing & Finance Course</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="/Ogalearn-Project/assets/2150781636.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mr.Peter </b> Received his order of Marketing & Finance Course</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="/Ogalearn-Project/assets/Screenshot (112).png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mr.Peter </b> Received his order of Marketing & Finance Course</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF RECENT UPDATE -->
            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+39</h5>
                        <h3>1000</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <i class='bx bx-cart'></i>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>OFFLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="danger">-19</h5>
                        <h3>3000</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>NEW CUSTOMERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="success">+24</h5>
                        <h3>800</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <i class='bx bx-plus'></i>
                        <h3>Add Product</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="Dashboard.js"></script>
</body>
</html>