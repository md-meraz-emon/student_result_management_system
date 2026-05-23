<?php
include("connect.php");


if(isset($_POST["email"])){

$email = $_POST["email"];
$password = $_POST["password"];

$check = mysqli_query($conn,
"SELECT * FROM signup WHERE email='$email'");

if(mysqli_num_rows($check) > 0){

$user = mysqli_fetch_assoc($check);

if(password_verify($password,$user["password"])){

session_start();
$_SESSION["user"] = $user["sno"];

header("Location: ../main-page/home.php?msg=Login Successful");
exit();

}else{

header("Location: signup_login.php?login_error=Wrong Email or Password");
exit();

}

}else{

header("Location: signup_login.php?login_error=User Not Found");
exit();

}
}
?>