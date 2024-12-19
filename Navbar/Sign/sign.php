<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Form</title>
    <link rel="stylesheet" href="sign.css">
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

<div id="header"></div>
<div class="Signcontainer">
<div class="form-container">
    <h2>Sign Up</h2>
    <form action="register.php" id="signUpForm" method="POST">
        <!-- Email input -->
        <input type="email" name="emailInput" id="emailInput" placeholder="Enter your email" required>
        <span class="error-message" id="emailError">Please include '@' in your email.</span>

        <!-- Password input -->
        <input type="password" name="passwordInput" id="passwordInput" placeholder="Enter your password" pattern=".{8,}" title="Password must be at least 8 characters long" required>
        <span class="error-message" id="passwordError">Passwords do not match.</span>

        <!-- Confirm Password input -->
        <input type="password" id="confirmPasswordInput" placeholder="Confirm your password" required>

        <!-- Sign-up button -->
        <button type="submit">Register</button>
        <span class="neli"><span>Already Have An Account </span><a class="al-have" href="/Ogalearn-Project/Navbar/Log/log.php">Log In</a></span>
    </form>

</div>
    <!-- Verification Code Field -->


    <!-- Log-in button (Hidden until verification) -->

</div>

<div id="footer"></div>

<script>
    document.getElementById('signUpForm').addEventListener('submit', function(event) {
        // Get the password and confirm password values
        const password = document.getElementById('passwordInput').value;
        const confirmPassword = document.getElementById('confirmPasswordInput').value;

        // Check if the passwords match
        if (password !== confirmPassword) {
            // Prevent form submission
            event.preventDefault();
            
            // Display error message
            document.getElementById('passwordError').style.display = 'inline'; // Show error message
        } else {
            // Hide the error message if the passwords match
            document.getElementById('passwordError').style.display = 'none';
        }
    });
</script>

</body>
</html>
