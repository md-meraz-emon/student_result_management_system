<?php
session_start();
include("connect.php");

if(isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($conn,
"SELECT * FROM admin WHERE username='$username'");

if(mysqli_num_rows($query)>0){

$data=mysqli_fetch_assoc($query);

if(password_verify($password,$data['password'])){

$_SESSION['admin']=$username;
header("Location: dashboard.php");

}else{
echo "<script>alert('Wrong Password');</script>";
}

}else{
echo "<script>alert('User Not Found');</script>";
}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Login</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>

body{
font-family:Segoe UI;
background:linear-gradient(135deg,#0f172a,#2563eb);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.login-box{
width:320px;
background:white;
padding:40px;
border-radius:18px;
box-shadow:0 10px 30px rgba(0,0,0,0.2);
text-align:center;
}

.login-box h2{
margin-bottom:25px;
}

input{
width:100%;
padding:12px;
margin:8px 0;
border-radius:8px;
border:1px solid #ddd;
}

button{
width:100%;
padding:12px;
border:none;
background:#2563eb;
color:white;
border-radius:8px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#1e40af;
}

</style>

</head>

<body>

<div class="login-box">

<h2><i class="fa fa-user-shield"></i> Admin Login</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

</div>

</body>
</html>