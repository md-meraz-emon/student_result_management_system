<?php
include("connect.php");
session_start();

if(isset($_POST["name"])){

$name = $_POST["name"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$checkEmail = mysqli_query($conn,
"SELECT * FROM signup WHERE email='$email'");

if(mysqli_num_rows($checkEmail) > 0){

header("Location: signup_login.php?mode=signup&signup_error=Email Already Exist");
exit();

}

$query = "INSERT INTO signup(name,email,password)
VALUES('$name','$email','$password')";

if(mysqli_query($conn,$query)){


$user_id = mysqli_insert_id($conn);

$_SESSION["user"] = $user_id;

header("Location: ../main-page/home.php?msg=Signup Successful");
exit();

}
}
?>