
 <?php
session_start();

if(!isset($_SESSION["user"])){
header("Location: ../sign-up-page/signup_login.php");
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Result </title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="main">

<nav>
    <img class="logo" src="finallogo2.png" alt="logo">

    <ul class="menu">
        <li><a href="../main-page/home.php" >Home</a></li>
        <?php if(isset($_SESSION["user"])) { ?>

<li><a href="../logout.php">Logout</a></li>

<?php } else { ?>

<li><a href="../sign-up-page/signup_login.php">Signup</a></li>

<?php } ?>
        <li><a href="../submit-result/submit_result.php " class="active"> Submit Result</a></li>
        <li><a href="../check-result/check_result.php" >Check Result</a></li>
        
    </ul>

    <div class="hamburger" onclick="openMenu()">☰</div>
</nav>
<?php
if(isset($_GET["submit_success"])){
echo "<div class='message success' id='submitMsg'>".$_GET["submit_success"]."</div>";
}
?> 
<!-- ⭐ Result Form Start -->


<div class="result-form">

<h2>Student Result Form</h2>

<form action="submit.php" method="POST" onsubmit="return submitResult();">

<input type="text" name="name" id="studentName" placeholder="Student Name">
<input type="text" name="id" id="studentId" placeholder="Student ID">

<select name="department" id="department">
    <option value="">Select Department</option>
    <option value="CST">CST</option>
    <option value="CT">CT</option>
    <option value="MT">MT</option>
    <option value="ET">ET</option>
</select>

<input type="text" name="subject" id="subject" placeholder="Subject">
<input type="number" name="marks" id="marks" placeholder="Marks">

<button name="submit">Submit Result</button>

</form>

<p id="msg"></p>

</div>
<!-- ⭐ Result Form End -->

</div>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <div class="close" onclick="closeMenu()">✖</div>
<form action="submit.php" method="POST">
    <ul>
          <li><a href="../main-page/home.php" >Home</a></li>
        <?php if(isset($_SESSION["user"])) { ?>

<li><a href="../logout.php">Logout</a></li>

<?php } else { ?>

<li><a href="../sign-up-page/signup_login.php">Signup</a></li>

<?php } ?>
        <li><a href="../submit-result/submit_result.php " class="active"> Submit Result</a></li>
        <li><a href="../check-result/check_result.php" >Check Result</a></li>

        
    </ul>
    </form>
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