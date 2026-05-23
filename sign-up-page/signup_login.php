 <?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup/Signin</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="main">

<nav>
    <img class="logo" src="finallogo2.png" alt="logo">

    <ul class="menu">
        <li><a href="../main-page/home.php">Home</a></li>
        <?php if(isset($_SESSION["user"])) { ?>

<li><a href="../logout.php">Logout</a></li>

<?php } else { ?>

<li><a href="../sign-up-page/signup_login.php">Signup</a></li>

<?php } ?>
        <li><a href="../submit-result/submit_result.php">Submit Result</a></li>
        <li><a href="../check-result/check_result.php" >Check Result</a></li>

        
    </ul>

    <div class="hamburger" onclick="openMenu()">☰</div>
</nav>


<div class="auth-section">



  

<div class="auth-box" id="loginBox">



<h2>Login</h2>


<?php


if(isset($_GET["login_error"])){
echo "<div class='login-error-msg'>".$_GET["login_error"]."</div>";
}
?>




<form action="login.php" method="POST">


<input type="email" name="email" placeholder="Enter Email">
<input type="password" name="password" placeholder="Enter Password">



<button type="submit">Login</button>



</form>

<p onclick="showSignup()">
Don't have account? <span class="switch-word">Signup</span>
</p>

</div>


<div class="auth-box hidden" id="signupBox">

<h2>Signup</h2>

<?php
if(isset($_GET["signup_error"])){
echo "<div class='signup-error-msg'>".$_GET["signup_error"]."</div>";
}

?>


<form action="register.php" method="POST">
     

<input type="text" name="name" placeholder="Enter Name">
<input type="email" name="email" placeholder="Enter Email">
<input type="password" name="password" placeholder="Create Password">



<button type="submit">Signup</button>

</form>

<p onclick="showLogin()">
Already have account? 
<span class="switch-word">Login</span>
</p>

</div>
</div>

</div>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <div class="close" onclick="closeMenu()">✖</div>

    <ul>
       <li><a href="../main-page/home.php">Home</a></li>
        <?php if(isset($_SESSION["user"])) { ?>

<li><a href="../logout.php">Logout</a></li>

<?php } else { ?>

<li><a href="../sign-up-page/signup_login.php">Signup</a></li>

<?php } ?>
        <li><a href="../submit-result/submit_result.php">Submit Result</a></li>
        <li><a href="../check-result/check_result.php" >Check Result</a></li>

        
    </ul>
</div>

<!-- Footer -->
<footer>
<div class="footer-container">

<div class="footer-section">
<h3>Contact Us</h3>
<p>Email: yourgmail@gmail.com</p>
<p>Phone: +880-XXXXXXXXXX</p>
</div>

<div class="footer-section">
<h3>Follow Us</h3>
<a href="#">Facebook</a><br>
<a href="#">Gmail</a>
</div>

<div class="footer-section">
<h3>About</h3>
<p>Student Result Management System</p>
</div>

</div>

<div class="footer-bottom">
© 2026 All Rights Reserved
</div>
</footer>

<script src="script.js"></script>

</body>
</html>