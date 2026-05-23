<?php session_start(); ?>

<nav>

<?php if(isset($_SESSION["user"])) { ?>

    <a href="logout.php">Logout</a>

<?php } else { ?>

    <a href="sign-up-page/signup_login.php">Login</a>
    <a href="sign-up-page/signup_login.php">Signup</a>

<?php } ?>

</nav>