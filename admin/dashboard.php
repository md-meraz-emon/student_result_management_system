<?php
session_start();
include("connect.php");

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* ===== Body ===== */

body{
margin:0;
font-family:Arial;
background:#eef2f7;
}

/* ===== Sidebar ===== */

.sidebar{
width:230px;
height:100vh;
background:#0f172a;
position:fixed;
padding-top:25px;
}

.sidebar h2{
color:white;
text-align:center;
margin-bottom:30px;
}

.sidebar a{
display:block;
color:white;
padding:15px;
text-decoration:none;
transition:0.3s;
}

.sidebar a:hover{
background:#1e293b;
padding-left:25px;
}

/* ===== Main ===== */

.main{
margin-left:230px;
padding:30px;
}

/* ===== Cards ===== */

.card{
width:230px;
background:white;
padding:25px;
border-radius:15px;
box-shadow:0 5px 20px rgba(0,0,0,0.1);
display:inline-block;
margin:15px;
text-align:center;
}

.card i{
font-size:35px;
margin-bottom:10px;
color:#2563eb;
}

.topbar{
background:white;
padding:15px;
border-radius:12px;
margin-bottom:30px;
box-shadow:0 3px 12px rgba(0,0,0,0.1);
}

</style>

</head>

<body>

<div class="sidebar">

<h2>Admin Panel</h2>

<a href="dashboard.php">
<i class="fa fa-home"></i> Dashboard
</a>

<a href="add_notice.php">
<i class="fa fa-bell"></i> Add Notice
</a>

<a href="change_password.php">
<i class="fa fa-key"></i> Change Password
</a>

<a href="logout.php">
<i class="fa fa-right-from-bracket"></i> Logout
</a>

<a href="add_result.php">
<i class="fa fa-plus"></i> Add Result
</a>

<a href="check_result.php">
<i class="fa fa-search"></i> Check Result
</a>

<a href="manage_result.php">
<i class="fa fa-edit"></i> Manage Result
</a>

</div>

<div class="main">

<div class="topbar">
<h2>Welcome Admin</h2>
</div>

<!-- Cards -->

<div class="card">
<i class="fa fa-users"></i>
<h3>Total Students</h3>

<?php
$res=mysqli_query($conn,"SELECT * FROM signup");
echo mysqli_num_rows($res);
?>

</div>

<div class="card">
<i class="fa fa-file"></i>
<h3>Total Result</h3>

<?php
$res=mysqli_query($conn,"SELECT * FROM submit_result");
echo mysqli_num_rows($res);
?>

</div>

<div class="card">
<i class="fa fa-bell"></i>
<h3>Total Notice</h3>

<?php
$res=mysqli_query($conn,"SELECT * FROM notice");
echo mysqli_num_rows($res);
?>

</div>

</div>

</body>
</html>