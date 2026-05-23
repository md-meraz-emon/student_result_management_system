<?php
session_start();
include("connect.php");

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
}

if(isset($_POST['notice'])){
$notice=$_POST['notice_text'];

mysqli_query($conn,
"INSERT INTO notice(notice_text,date)
VALUES('$notice',current_timestamp())");

echo "<script>alert('Notice Added Successfully');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Notice</title>

<style>
body{
font-family:Arial;
background:#eef2f7;
}

.box{
width:400px;
margin:100px auto;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 5px 20px rgba(0,0,0,.1);
}

textarea{
width:100%;
height:150px;
padding:12px;
border-radius:8px;
border:1px solid #ccc;
margin-bottom:15px;
resize:none;
}

button{
width:100%;
padding:12px;
background:#2563eb;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
font-size:16px;
}

button:hover{
background:#1d4ed8;
}
</style>

</head>

<body>

<div class="box">

<h2>Add Notice</h2>

<form method="POST">

<textarea name="notice_text"
placeholder="Write notice here..." required></textarea>

<button name="notice">Publish Notice</button>

</form>

</div>

</body>
</html>