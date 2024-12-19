<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ogalearn - Home</title>
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>
<script>
function loadHeaderFooter() {
fetch("/Ogalearn-Project/Navbar/Header/header.php").then(response => response.text()).then(data => {
  document.getElementById("header").innerHTML = data;
});
fetch("/Ogalearn-Project/Navbar/Footer/footer.php").then(response => response.text()).then(data => {
  document.getElementById("footer").innerHTML = data;
});
}
window.onload = loadHeaderFooter;
</script>
<script>
    function openNav(){
        document.getElementById("navtent").style.display = "block";
        document.getElementbyId("smallnav").style.display = "none";
    }

    function closeNav(){
        document.getElementById("navtent").style.display = "none";
        document.getElementbyId("smallnav").style.display = "block";
    }
</script>
    <div id="header"></div>
    <div class="hero">
        <div class="hero-content">
            <div class="container">
                <div class="typewriter">
                    <div class="hetop"><h2 >Welcome to <i>Ogalearn University</i></h2></div>
                    <div><h1 class="retype" id="text"></h1></div>
                    <div class="des"><p>Online Programming and Tech University</p></div>
                    <div class="yort">
                        <a href="/Ogalearn-Project/Navbar/Sign/sign.php"><button class="type-new">Create An Account</button></a>
                        <a href=""><button class="get-new">Get started</button></a>
                    </div>
                </div>
                <div class="shot2"><img id="image" src="assets/image1.jpeg" alt="Image 1"></div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="body-content">
            <div class="bod-img">
                <img src="assets/image-women.webp" alt="A Lady Veiwing Content On Her Device">
            </div>
            <div class="bod-text">
                <div class="contan1"><h3>Who we are</h3></div>
                <div class="contan2"><h1>Flexible learning options and skills acquisition</h1></div>
                <div class="contan3"><p>Ogalearn is a Digital institute that profer solution to Tech education in Nigeria and Africa.We are commited to offering quality education for all.
                     We also build and deploy website and mobile application for every business sector</p></div>
                <div class="read"><a href="/Ogalearn-Project/Navbar/About/About.php"><button>Read More On <i>Ogalearn</i></button></a></div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="about-content">
            <div class="about-img">
                <img src="assets/eLA24_by_www.introduce.berlin_dominik-tryba_INT_2928-1024x683.jpg" alt="">
            </div>
            <div class="about-text">
                <div class="hold1"><h3>About Us</h3></div>
                <div class="hold2"><h1>We Care About The Quality Of Knowledge That Is Being Inculcated To Our Students.</h1></div>
                <div class="about-button">
                    <div class="but1"><a href=""><button>OUR GOAL</button></a></div>
                    <div class="but2"><a href=""><button>OUR VISION</button></a></div>
                    <div class="but3"><a href=""><button>OUR MISSION</button></a></div>
                </div>
                <div class="but4"><p>Our goal is to produce over 10,000 quality Tallent that will dominate Africa and beyond by 2030 </p></div>
                <div class="explore"><a href="#course-scroll"><button>Explore Our Courses</button></a></div>
            </div>
        </div>
    </div>
    <div class="join">
        <div class="join-content">
            <div class="join-tent1">
                <h3>How To Join</h3>
                <h2>It's Easy To Join And Learn With Us</h2>
            </div>
            <div class="join-tent2">
                <div class="join-con">
                    <div class="join-text">
                        <img src="assets/line.png" alt="">
                    </div>
                    <div class="teps">
                        <button>1</button>
                    </div>
                    <div>
                        <h3>Register</h3>
                        <p>To be an account holder you have to open an account first.</p>
                    </div>
                </div>
                <div class="join-con">
                    <div class="join-text">
                        <img src="assets/line.png" alt="">
                    </div>
                    <div class="teps">
                        <button>2</button>
                    </div>
                    <div>
                        <h3>Verification</h3>
                        <p>After registration you need to verify your Email and Mobile Number.</p>
                    </div>
                </div>
                <div class="join-con">
                    <div class="join-text">
                        <img src="assets/line.png" alt="">
                    </div>
                    <div class="teps">
                        <button>3</button>
                    </div>
                    <div>
                        <h3>Learning Account</h3>
                        <p>To be an account holder you have to open an account first.</p>
                    </div>
                </div>
                <div class="join-con">
                    <div class="teps">
                        <button>4</button>
                    </div>
                    <div>
                        <h3>Open An Account</h3>
                        <p>To be an account holder you have to open an account first.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="choose">
        <div class="choose-content">
            <div class="rea-con">
                <div class="numb">
                    <div class="one">
                        <button style="color: purple;"><b>1</b></button>
                    </div>
                    <div class="two">
                        <button style="color: purple;"><b>2</b></button>
                    </div>
                </div>
                <div>
                    <h3 class="about-us">Why Choose Us</h3>
                    <h2 class="trup">We Offer Qualified Courses And Adequate Teaching</h2>
                </div>
                <div>
                    <div class="we">
                        <b><p style="font-family: 'Times New Roman', Times, serif;  color: purple; font-size: 1.5rem; padding-bottom: 1rem;">We have the BEST learning experience</p></b>
                        <p class="spend">Save it, spend it, send it. It's up to you. Whatever you choose to do with your money, we'll make sure it's done better and free of charge.</p>
                    </div>
                    <div>
                        <hr class="dive">
                    </div>
                    <div class="otp-chid">
                        <b><p style="font-family: 'Times New Roman', Times, serif;  color: purple; font-size: 1.5rem; padding-bottom: 1rem;">Qualified Certificates</p></b>
                        <p class="otp">The OTP is a randomly generated code that is sent to your phone or email. You will need to enter this code in order to confirm your transaction.</p>
                    </div>
                </div>
                <div class="learn"><a href="/Navbar/Learn/Learn.html"><button>Learn With <i>Ogalearn</i></button></a></div>
            </div>
            <div class="about-img3">
                <img src="assets/ThoughtLeadership-manontrain-1024x683.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="course-scroll" class="course">
        <div class="course-content">
            <div class="center">
                <h3 class="course-head">Courses</h3>
                <h2 class="offer">Start learning with free courses</h2>
            </div>
            <div class="course-menu">
                <div class="cou-menu">
                    <div class="cou-men-flex">
                        <a href="/Ogalearn-Project/Ogalearn-check.php">
                            <div>
                                <div class="cou-menu-con">
                                    <div><img src="assets/analysis.jpeg" alt="Image"></div>
                                    <div class="course-topic">
                                        <h3 class="topy">Data Analysis</h3>
                                        <h2 class="noty">Earn A Degree</h2>
                                        <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/Ogalearn-Project/Ogalearn-check.php">
                            <div>
                                <div class="cou-menu-cen">
                                    <div><img src="assets/ui.jpeg" alt="Image"></div>
                                    <div class="course-topic">
                                        <h3 class="topy">UI/UX Design</h3>
                                        <h2 class="noty">Earn A Degree</h2>
                                        <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/Ogalearn-Project/Ogalearn-check.php">
                            <div>
                                <div class="cou-menu-can">
                                    <div><img src="assets/design.jpeg" alt="Image"></div>
                                    <div class="course-topic">
                                        <h3 class="topy">Graphics Design</h3>
                                        <h2 class="noty">Earn A Degree</h2>
                                        <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cou-men-flex">
                        <a href="/Ogalearn-Project/Ogalearn-check.php">
                            <div>
                                <div class="cou-menu-con">
                                    <div><img src="assets/development.jpeg" alt="Image"></div>
                                    <div class="course-topic">
                                        <h3 class="topy">Web Development</h3>
                                        <h2 class="noty">Earn A Degree</h2>
                                        <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/Ogalearn-Project/Ogalearn-check.php">
                            <div>
                                <div class="cou-menu-cen">
                                    <div><img src="assets/marketing.jpeg" alt="Image"></div>
                                    <div class="course-topic">
                                        <h3 class="topy">UI/UX Design</h3>
                                        <h2 class="noty">Earn A Degree</h2>
                                        <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/Ogalearn-Project/Ogalearn-check.php">
                            <div>
                                <div class="cou-menu-can">
                                    <div><img src="assets/app.jpeg" alt="Image"></div>
                                    <div class="course-topic">
                                        <h3 class="topy">Graphics Design</h3>
                                        <h2 class="noty">Earn A Degree</h2>
                                        <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="comen-more">
                        <div class="must-work">
                            <a href="/Ogalearn-Project/Ogalearn-check.php">
                                <div>
                                    <div class="cou-menu-con">
                                        <div><img src="" alt="Image"></div>
                                        <div class="course-topic">
                                            <h3 class="topy">Data Analysis</h3>
                                            <h2 class="noty">Earn A Degree</h2>
                                            <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/Ogalearn-Project/Ogalearn-check.php">
                                <div>
                                    <div class="cou-menu-cen">
                                        <div><img src="" alt="Image"></div>
                                        <div class="course-topic">
                                            <h3 class="topy">Data Analysis</h3>
                                            <h2 class="noty">Earn A Degree</h2>
                                            <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/Ogalearn-Project/Ogalearn-check.php">
                                <div>
                                    <div class="cou-menu-can">
                                        <div><img src="" alt="Image"></div>
                                        <div class="course-topic">
                                            <h3 class="topy">Data Analysis</h3>
                                            <h2 class="noty">Earn A Degree</h2>
                                            <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="must-work">
                            <a href="/Ogalearn-Project/Ogalearn-check.php">
                                <div>
                                    <div class="cou-menu-con">
                                        <div><img src="" alt="Image"></div>
                                        <div class="course-topic">
                                            <h3 class="topy">Data Analysis</h3>
                                            <h2 class="noty">Earn A Degree</h2>
                                            <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/Ogalearn-Project/Ogalearn-check.php">
                                <div>
                                    <div class="cou-menu-cen">
                                        <div><img src="" alt="Image"></div>
                                        <div class="course-topic">
                                            <h3 class="topy">Data Analysis</h3>
                                            <h2 class="noty">Earn A Degree</h2>
                                            <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/Ogalearn-Project/Ogalearn-check.php">
                                <div>
                                    <div class="cou-menu-can">
                                        <div><img src="" alt="Image"></div>
                                        <div class="course-topic">
                                            <h3 class="topy">Data Analysis</h3>
                                            <h2 class="noty">Earn A Degree</h2>
                                            <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="more-course">
                    <a class="shomo" id="shomo"><button id="shomo-button">Show More</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="services">
        <div class="services-content">
            <div class="service-tent1">
                <h3>Services</h3>
                <h2>We Offer And Serve Quality Services</h2>
            </div>
            <div class="service-tent2">
                <div class="ser-tent">
                    <div class="service-tent-con">
                        <div><img src="" alt="Image"></div>
                        <div class="service-topic">
                            <h3 class="topy">Web Design</h3>
                            <h2 class="noty">We Design Websites</h2>
                            <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                        </div>
                    </div>
                    <div class="service-tent-con">
                        <div><img src="" alt="Image"></div>
                        <div class="service-topic">
                            <h3 class="topy">Digital Marketing</h3>
                            <h2 class="noty">We Marketise Digitally </h2>
                            <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                        </div>
                    </div>
                    <div class="service-tent-con">
                        <div><img src="" alt="Image"></div>
                        <div class="service-topic">
                            <h3 class="topy">Web Development</h3>
                            <h2 class="noty">We Develop And Create Website</h2>
                            <p>Do you have a great idea but need help to turn it into a business? Find courses about necessary business and financial skills to build and run your own start-up.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-button">
                <a href=""><button>View More Services</button></a>
            </div>
        </div>
    </div>
    <div>
        <div class="job">
            <div class="job-content">
                <div class="center">
                    <h3 class="course-head">Jobs</h3>
                    <h2 class="offer">Our Recent Projects</h2>
                </div>
                <div class="course-menu">
                    <div class="cou-menu">
                        <div class="hob-flex">
                            <div class="go-flex1">
                                <div>
                                    <div class="job-img" data-popup="popup1">
                                        <div class="down-down"><img src="assets/eLA24_by_www.introduce.berlin_dominik-tryba_INT_2928-1024x683.jpg" alt="Image"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="job-img" data-popup="popup2">
                                        <div><img src="assets/image-women.webp" alt="Image"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="job-img" data-popup="popup3">
                                        <div><img src="assets/Fidelity-bank-plc-building-financial.webp" alt="Image"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="go-flex2">
                                <div>
                                    <div class="job-img" data-popup="popup4">
                                        <div><img src="assets/eLA24_by_www.introduce.berlin_dominik-tryba_INT_2928-1024x683.jpg" alt="Image"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="job-img" data-popup="popup5">
                                        <div><img src="assets/image-women.webp" alt="Image"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="job-img" data-popup="popup6">
                                        <div><img src="assets/Fidelity-bank-plc-building-financial.webp" alt="Image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="popup1" class="popup-content">
            <div class="popo">
                <div class="popo-con1"><img class="pop-shift" src="assets/Fidelity-bank-plc-building-financial.webp" alt=""></div>
                <hr  style="border: solid #F0F2F5 0.1px; margin-top: 1rem;">
                <div class="popo-con2">
                    <h1>Wills</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur itaque cumque unde eaque, animi laudantium nobis, asperiores officiis eos ratione rem placeat magni repellat quas non tenetur accusamus. Veritatis, sit.</p>
                    <h2>Industry</h2>
                    <p>Wills Tech Institute</p>
                    <h2>Services We Provide</h2>
                    <p>Digital Marketing<br>Web Design<br>Web Development</p>
                    <a href=""><h2>Visit Website</h2></a>
                </div>
            </div>
            <button class="cancel-btn">&times;</button>
        </div>
        <div id="popup2" class="popup-content">
            <div class="popo">
                <div class="popo-con1"><img class="pop-shift" src="assets/Fidelity-bank-plc-building-financial.webp" alt=""></div>
                <hr  style="border: solid #F0F2F5 0.1px; margin-top: 1rem;">
                <div class="popo-con2">
                    <h1>Sonia</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur itaque cumque unde eaque, animi laudantium nobis, asperiores officiis eos ratione rem placeat magni repellat quas non tenetur accusamus. Veritatis, sit.</p>
                    <h2>Industry</h2>
                    <p>Hair Dressing</p>
                    <h2>Services We Provide</h2>
                    <p>Installation Of Frontiers<br>Importation Of Vietnamise<br>Chizzy's Acrylic & Gel Nail's</p>
                    <a href=""><h2>Visit Website</h2></a>
                </div>
            </div>
            <button class="cancel-btn">&times;</button>
        </div>
        <div id="popup3" class="popup-content">
            <div class="popo">
                <div class="popo-con1"><img class="pop-shift" src="assets/Fidelity-bank-plc-building-financial.webp" alt=""></div>
                <hr  style="border: solid #F0F2F5 0.1px; margin-top: 1rem;">
                <div class="popo-con2">
                    <h1>Henschel</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur itaque cumque unde eaque, animi laudantium nobis, asperiores officiis eos ratione rem placeat magni repellat quas non tenetur accusamus. Veritatis, sit.</p>
                    <h2>Industry</h2>
                    <p>Architectural Services</p>
                    <h2>Services We Provide</h2>
                    <p>Digital Marketing<br>Web Design<br>Web Development</p>
                    <a href=""><h2>Visit Website</h2></a>
                </div>
            </div>
            <button class="cancel-btn">&times;</button>
        </div>
        <div id="popup4" class="popup-content">
            <div class="popo">
                <div class="popo-con1"><img class="pop-shift" src="assets/Fidelity-bank-plc-building-financial.webp" alt=""></div>
                <hr  style="border: solid #F0F2F5 0.1px; margin-top: 1rem;">
                <div class="popo-con2">
                    <h1>Sheyi</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur itaque cumque unde eaque, animi laudantium nobis, asperiores officiis eos ratione rem placeat magni repellat quas non tenetur accusamus. Veritatis, sit.</p>
                    <h2>Industry</h2>
                    <p>Pending</p>
                    <h2>Services We Provide</h2>
                    <p>Mini Militia Teaching<br>Player X<br>Boss</p>
                    <a href=""><h2>Visit Website</h2></a>
                </div>
            </div>
            <button class="cancel-btn">&times;</button>
        </div>
        <div id="popup5" class="popup-content">
            <div class="popo">
                <div class="popo-con1"><img class="pop-shift" src="assets/Fidelity-bank-plc-building-financial.webp" alt=""></div>
                <hr  style="border: solid #F0F2F5 0.1px; margin-top: 1rem;">
                <div class="popo-con2">
                    <h1>Silver</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur itaque cumque unde eaque, animi laudantium nobis, asperiores officiis eos ratione rem placeat magni repellat quas non tenetur accusamus. Veritatis, sit.</p>
                    <h2>Industry</h2>
                    <p>Trading</p>
                    <h2>Services We Provide</h2>
                    <p>Buying & Selling Of Food Stuffs<br>Buying Biscuit<br>Mini Pablo</p>
                    <a href=""><h2>Visit Website</h2></a>
                </div>
            </div>
            <button class="cancel-btn">&times;</button>
        </div>
        <div id="popup6" class="popup-content">
            <div class="popo">
                <div class="popo-con1"><img class="pop-shift" src="assets/Fidelity-bank-plc-building-financial.webp" alt=""></div>
                <hr  style="border: solid #F0F2F5 0.1px; margin-top: 1rem;">
                <div class="popo-con2">
                    <h1>Samuel</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur itaque cumque unde eaque, animi laudantium nobis, asperiores officiis eos ratione rem placeat magni repellat quas non tenetur accusamus. Veritatis, sit.</p>
                    <h2>Industry</h2>
                    <p>Trading</p>
                    <h2>Services We Provide</h2>
                    <p>Digital Marketing<br>Web Design<br>Web Development</p>
                    <a href=""><h2>Visit Website</h2></a>
                </div>
            </div>
            <button class="cancel-btn">&times;</button>
        </div>
        
        <div class="overlay"></div>
        
        <div class="popup-navigation">
            <button class="prev-btn">&Leftarrow;</button>
            <button class="next-btn">&Rightarrow;</button>
        </div>
    </div>
    <div id="footer"></div>
    <script src="Ogalearn.js"></script>
</body>