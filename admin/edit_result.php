<?php
session_start();
include("connect.php");

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
}

if(!isset($_GET['sno'])){
header("Location: dashboard.php");
exit();
}

$sno=$_GET['sno'];

$res=mysqli_query($conn,
"SELECT * FROM submit_result WHERE sno='$sno'");

$data=mysqli_fetch_assoc($res);

if(isset($_POST['update'])){

$name=$_POST['name'];
$marks=$_POST['marks'];

mysqli_query($conn,
"UPDATE submit_result 
SET name='$name', marks='$marks'
WHERE sno='$sno'");

header("Location: dashboard.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Result</title>
<style>
body{
font-family:Arial;
background:#eef2f7;
}

.formbox{
width:400px;
margin:100px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 5px 20px rgba(0,0,0,.1);
}

input{
width:100%;
padding:10px;
margin:10px 0;
border:1px solid #ccc;
border-radius:6px;
}

button{
width:100%;
padding:10px;
background:#2563eb;
color:white;
border:none;
border-radius:6px;
cursor:pointer;
}
</style>
</head>

<body>

<div class="formbox">
<h2>Edit Student Result</h2>

<form method="POST">
<input type="text" name="name"
value="<?php echo $data['name']; ?>" required>

<input type="text" name="marks"
value="<?php echo $data['marks']; ?>" required>

<button name="update">Update</button>
</form>

</div>

</body>
</html>