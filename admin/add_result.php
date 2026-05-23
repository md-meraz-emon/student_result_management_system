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
<title>Add Result</title>

<style>

body{
margin:0;
font-family:Arial;
background:linear-gradient(135deg,#eef2f7,#dbeafe);
}

.formbox{
width:420px;
margin:80px auto;
background:white;
padding:35px;
border-radius:18px;
box-shadow:0 10px 30px rgba(0,0,0,.1);
}

h2{
text-align:center;
margin-bottom:25px;
color:#0f172a;
}

input,select{
width:100%;
padding:12px;
margin:10px 0;
border-radius:8px;
border:1px solid #ddd;
font-size:15px;
}

button{
width:100%;
padding:14px;
background:#2563eb;
color:white;
border:none;
border-radius:8px;
font-size:16px;
cursor:pointer;
font-weight:bold;
}

button:hover{
background:#1d4ed8;
}

.success{
color:green;
text-align:center;
margin-top:15px;
}

</style>

</head>

<body>

<div class="formbox">

<h2>Add Student Result</h2>

<form method="POST">

<input type="text" name="name" placeholder="Student Name" required>

<input type="text" name="id" placeholder="Student ID" required>

<select name="department" required>
<option value="">Select Department</option>
<option value="CT">CT</option>
<option value="CST">CST</option>
<option value="MT">MT</option>
<option value="ET">ET</option>
</select>

<input type="text" name="subject" placeholder="Subject" required>

<input type="text" name="marks" placeholder="Marks" required>

<button name="submit">Submit Result</button>

</form>

<?php
if(isset($_POST['submit'])){

$name=$_POST['name'];
$id=$_POST['id'];
$department=$_POST['department'];
$subject=$_POST['subject'];
$marks=$_POST['marks'];

mysqli_query($conn,
"INSERT INTO submit_result
(name,id,department,subject,marks,date)
VALUES
('$name','$id','$department','$subject','$marks',current_timestamp())");

echo "<p class='success'>✅ Result Added Successfully</p>";
}
?>

</div>

</body>
</html>