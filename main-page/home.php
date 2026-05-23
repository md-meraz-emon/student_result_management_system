
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
    <title>Student Result Manage System Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="main">

  


        <nav>
            <img class="logo" src="finallogo2.png" alt="logo">

            <ul class="menu">
                <li><a href="../main-page/home.php" class="active">Home</a></li>
                <?php if (isset($_SESSION["user"])) { ?>

                    <li><a href="../logout.php">Logout</a></li>

                <?php } else { ?>
                    <li><a href="../sign-up-page/signup_login.php">Signup</a></li>

                <?php } ?>
                <li><a href="../submit-result/submit_result.php"> Submit Result</a></li>
                <li><a href="../check-result/check_result.php">Check Result</a></li>


            </ul>

            <div class="hamburger" onclick="openMenu()">☰</div>
        </nav>

  <<div class="hero-banner">
    <h1 class="hero-text" id="heroText"></h1>
</div>>

        <?php
        if (isset($_GET["msg"])) {
            ?>
            <div class="alert-success" id="msgBox">
                <?php echo $_GET["msg"]; ?>
            </div>
            <?php
        }
        ?>

        <?php
        if (isset($_GET["signup_success"])) {
            echo "<div class='message success' id='msgBox'>" . $_GET["signup_success"] . "</div>";
        }
        ?>

    </div>



    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="close" onclick="closeMenu()">✖</div>

        <ul>
            <li><a href="../main-page/home.php" class="active">Home</a></li>
            <?php if(isset($_SESSION["user"])) { ?>

<li><a href="../logout.php">Logout</a></li>

<?php } else { ?>

<li><a href="../sign-up-page/signup_login.php">Signup</a></li>

<?php } ?>
            <li><a href="../submit-result/submit_result.php"> Submit Result<a>
            <li>
            <li><a href="../check-result/check_result.php">Check Result</a></li>



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