<?php
include("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Check Result</title>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#eef2f7,#dbeafe);
}

.box{
width:420px;
margin:80px auto;
background:white;
padding:30px;
border-radius:18px;
box-shadow:0 8px 25px rgba(0,0,0,.1);
text-align:center;
}

input{
width:100%;
padding:12px;
margin:12px 0;
border-radius:8px;
border:1px solid #ddd;
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

.result-box{
margin-top:20px;
text-align:left;
padding:15px;
border-radius:12px;
background:#f8fafc;
}

.result-box p{
padding:6px 0;
border-bottom:1px solid #eee;
}

h2{
margin-bottom:20px;
}

</style>

</head>

<body>

<div class="box">

<h2>Check Your Result</h2>

<form method="POST">

<input type="text"
name="student_id"
placeholder="Enter Student ID"
required>

<input type="text"
name="department"
placeholder="Enter Department"
required>

<button name="search">Check Result</button>

</form>

<?php
if(isset($_POST['search'])){

$id=$_POST['student_id'];
$dept=$_POST['department'];

$query=mysqli_query($conn,
"SELECT * FROM submit_result 
WHERE id='$id' 
AND department='$dept'");

if(mysqli_num_rows($query)>0){

$row=mysqli_fetch_assoc($query);
?>

<div class="result-box">

<h3>Result Details</h3>

<p><b>Name:</b> <?php echo $row['name']; ?></p>
<p><b>ID:</b> <?php echo $row['id']; ?></p>
<p><b>Department:</b> <?php echo $row['department']; ?></p>
<p><b>Subject:</b> <?php echo $row['subject']; ?></p>
<p><b>Marks:</b> <?php echo $row['marks']; ?></p>

</div>

<?php
}else{
echo "<p style='color:red'>Result Not Found</p>";
}
}
?>

</div>

</body>
</html>