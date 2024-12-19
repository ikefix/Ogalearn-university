<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="/Ogalearn-Project/Styles.css">
    <link rel="stylesheet" href="/Ogalearn-Project/responsive.css">
</head>
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
<body>
<?php
session_start();
include 'Checking.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch the user based on the email
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Check if the account is verified
        if ($user['status'] == 0) {
            $_SESSION['error_message'] = 'Your account is not verified. Please check your email.';
            header('Location: log.php');
            exit;
        }

        // Verify the password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['success_message'] = 'Login successful!';
            header('Location: dashboard.php'); // Redirect to the dashboard or home page
            exit;
        } else {
            $_SESSION['error_message'] = 'Incorrect password.';
        }
    } else {
        $_SESSION['error_message'] = 'Email not found.';
    }

    header('Location: login.php');
    exit;
}
?>
<div id="header"></div>
<div class="log">
    <div class="text-container">
        <div class="text2">
            <h1>Ogalearn</h1>
        </div>
        <div class="text">
            <p>Ogalearn Invites All To Learn</p>
        </div>
    </div>
    <div class="form-container">
        <h2>Log In</h2>
        <form action="confirm.php" id="loginForm" method="POST">
            <!-- Email input -->
             <div class="step-1">
                <input type="email" name="emailInput" id="emailInput" placeholder="Enter your email" required>
                <span class="error-message" id="emailError">Please enter a valid email.</span>
                <button class="pot1" type="button" onclick="validateEmail()">Log In</button> <!-- Change to validateEmail() -->
             </div>
    
            <!-- Password input -->
             <div class="password-field">
                <input type="email" id="emailDisplay" disabled>
                <input type="password" name="passwordInput" id="passwordInput" pattern=".{8,}" title="Password must be at least 8 characters long" placeholder="Enter your password" placeholder="Enter your password" required>
                <div class="showa"><input type="checkbox" pattern="0-8" onclick="myFunction()"><span>Show Password</span></div>
                <button class="pot2" type="submit">Log In</button>
             </div>
    
            <!-- Login button -->
    
        </form>
        <div class="create">
                <div class="otitlo"><a href="">Forgotten Password?</a></div>
                <hr><br>
                <a href="/Ogalearn-Project/Navbar/Sign/sign.php" class="create-text"><button>Create New Account</button></a>
            </div>
    
        <!-- Account creation link -->
        <div class="dont">
            <p class="dont2">Don't have an account?.</p>
            <a class="sip-up" href="/Ogalearn-Project/Navbar/Sign/sign.php">Sign up here</a>
        </div>
    </div>
</div>

<div id="footer"></div>
<script>
    function showPasswordField() {
            // Get the email value from the first step
            const email = document.getElementById('emailInput').value;
    
            // If the email is valid, proceed to show the password field
            if (email) {
                document.querySelector('.step-1').style.display = 'none'; // Hide the first step
                document.querySelector('.password-field').style.display = 'block'; // Show the password field
                document.getElementById('emailDisplay').value = email; // Pre-fill the email in the second step
            } else {
                alert("Please enter a valid email address.");
            }
        }
            // Only validate the email input
    function validateEmail() {
        const emailInput = document.getElementById('emailInput').value;
        const emailError = document.getElementById('emailError');

        // Check if the email contains '@gmail.com'
        if (emailInput.includes('@gmail.com')) {
            // Hide error message and proceed if valid
            emailError.style.display = 'none'; // Hides error if correct

            // Proceed to show the password field
            document.querySelector('.step-1').style.display = 'none'; // Hide the first step
            document.querySelector('.password-field').style.display = 'block'; // Show the password field
            document.getElementById('emailDisplay').value = emailInput; // Pre-fill the email
        } else {
            // Show error message if '@gmail.com' is missing
            emailError.style.display = 'block'; // Show the error
        }
    }

    function myFunction() {
    const x = document.getElementById ("passwordInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>

</body>
</html>
