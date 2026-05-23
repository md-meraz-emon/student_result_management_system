<?php
session_start();
include("connect.php");

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
}

if(isset($_POST['change'])){

$newpass=password_hash($_POST['password'], PASSWORD_DEFAULT);
$user=$_SESSION['admin'];

mysqli_query($conn,
"UPDATE admin SET password='$newpass' WHERE username='$user'");

echo "<script>alert('Password Changed Successfully');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>

<style>

body{
margin:0;
font-family:Arial;
background:#eef2f7;
}

.box{
width:380px;
margin:120px auto;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 5px 20px rgba(0,0,0,.1);
text-align:center;
}

input{
width:100%;
padding:12px;
margin:12px 0;
border-radius:8px;
border:1px solid #ccc;
}

button{
width:100%;
padding:12px;
background:#2563eb;
color:white;
border:none;
border-radius:8px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#1d4ed8;
}

h2{
margin-bottom:20px;
}

</style>

</head>

<body>

<div class="box">

<h2>Change Password</h2>

<form method="POST">

<input type="password"
name="password"
placeholder="Enter New Password"
required>

<button name="change">Change Password</button>

</form>

</div>

</body>
</html>