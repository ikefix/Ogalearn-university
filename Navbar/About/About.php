<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About.Ogalearn.com</title>
    <link rel="stylesheet" href="About.css">
    <link rel="stylesheet" href="Responsive.css">
    <link rel="stylesheet" href="/Ogalearn-Project/Styles.css">
    <link rel="stylesheet" href="/Ogalearn-Project/responsive.css">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet"> -->
</head>
<script>
    function loadHeaderFooter() {
      fetch("/Ogalearn-Project/Navbar/Header/header.php").then(response => response.text()).then(data => {
      document.getElementById("header").innerHTML = data;
      });
      fetch("/Ogalearn-Project/Navbar/Footer/footer.php").then(response => response.text()).then(data => {
      document.getElementById("footer").innerHTML = data;
      });
    // fetch("/Navbar/Sign/sign.html").then(response => response.text()).then(data => {
    //   document.getElementById("log-in").innerHTML = data;
    // });
    }
    window.onload = loadHeaderFooter;
    </script>
<body>
    <div id="header"></div>
    <div class="hero">
      <div class="hero-wrapper">
        <div class="hero-text">
          <div><video class="vid" src="/Ogalearn-Project/assets/Trim.mp4" autoplay loop muted></video></div>
          <div class="hero-text-top">
            <h2>Our Vision</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In rem quod blanditiis labore fugiat repellat magni hic. Reprehenderit repellat suscipit quis? Mollitia odit sit odio minima amet minus voluptas magni?</p>
            <a href="/Ogalearn-Project/Dashboard/Community/community.php"><button class="comy">Go To Community</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="partner">
      <div class="partner-content">
        <div class="partner-text">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam soluta corrupti magnam magni sapiente deserunt placeat? Exercitationem, similique porro! Incidunt ad sint aperiam iusto sed esse! Id distinctio enim atque!</p>
        </div>
        <div class="partner-image">
          <img src="/Ogalearn-Project/assets/partner-logo.png" alt="">
        </div>
      </div>
    </div>
    <div class="body-text">
      <div class="bid-text">
        <div>
          <h1>We Believe</h1>
          <br>
          <p>Learning is the foundation of human growth and progress
            <br>
            <br>
            It empowers individuals to innovate, adapt, and overcome challenges. 
            <br>
            Through learning, we unlock new possibilities,
            <br>
            foster creativity,
            <br>
            and build a better future.
            <br>
            <br>
            Learning shapes our destiny
            <br>
            It has the power to uplift us,
            <br>
            to inspire our families,
            <br>
            and to strengthen our communities.
            <br>
            <br>
            It unlocks new opportunities,
            <br>
            fuels innovation,
            <br>
            and strengthens society.
            <br>
            That's why access to learning is a right, not a privilege.
            <br>
            <br>
            And that's why <i>Ogalearn</i> exists
            <br>
            partnering with top institutions
            <br>
            to deliver the finest learning experiences
            <br>
            to every corner of the globe.
            <br>
            <br>
            So that anyone, anywhere has the power to
            <br>
            transform their lives through learning.
          </p>
        </div>
      </div>
    </div>
    <div class="story">
      <div class="story-content">
        <div class="story-text">
          <h1>Our Story</h1>
          <h3>The better we do, the more good we can do</h3>
          <p><i><b>Ogalearn</b></i> was founded by Omeke Peter and Ottoh-Charles Wills in 2012 with a vision of providing life-transforming learning experiences to learners around the world. Today, Coursera is a global platform for online learning and career development that offers anyone, anywhere, access to online courses and degrees from leading universities and companies. Coursera received B Corp certification in February 2021, which means that we have a legal duty not only to our shareholders, but to also make a positive impact on society more broadly, as we continue our efforts to reduce barriers to world-class education for all.148 million learners and more than 7,000 campuses, businesses, and governments have come to Coursera to access world-class learning anytime, anywhere</p>
        </div>
        <div class="stor-text-img">
          <img src="/Ogalearn-Project/assets/Screenshot (230).png" alt="">
          <p>Above:Omeke Peter, Below: Ottoh-Charles Wills And By Right Student</p>
        </div>
      </div>
    </div>
    <div id="footer"></div>
    <script>
      window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    var scrollThreshold = 600; // Change color after scrolling 70px

    if (window.scrollY >= scrollThreshold) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
    </script>
</body>
</html>