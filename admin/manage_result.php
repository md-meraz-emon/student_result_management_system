<?php
session_start();
include("connect.php");

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
}

$res=mysqli_query($conn,"SELECT * FROM submit_result");
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Results</title>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
margin:0;
font-family:Arial;
background:#eef2f7;
}

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
}

.sidebar a:hover{
background:#1e293b;
padding-left:20px;
}

.main{
margin-left:230px;
padding:30px;
}

.topbar{
background:white;
padding:15px;
border-radius:12px;
margin-bottom:25px;
box-shadow:0 3px 12px rgba(0,0,0,0.1);
}

.table-box{
background:white;
padding:20px;
border-radius:15px;
box-shadow:0 5px 20px rgba(0,0,0,0.1);
}

table{
width:100%;
border-collapse:collapse;
}

th{
background:#2563eb;
color:white;
padding:12px;
}

td{
padding:10px;
text-align:center;
border-bottom:1px solid #ddd;
}

tr:hover{
background:#f1f5f9;
}

.edit{
background:#2563eb;
color:white;
padding:6px 12px;
text-decoration:none;
border-radius:6px;
font-size:14px;
}

.edit:hover{
background:#1d4ed8;
}
</style>
</head>

<body>

<div class="sidebar">
<h2>Admin Panel</h2>
<a href="dashboard.php">Dashboard</a>
<a href="add_result.php">Add Result</a>
<a href="manage_result.php">Manage Result</a>
<a href="logout.php">Logout</a>
<a href="add_result.php">Add Result</a>
<a href="check_result.php">Check Result</a>
</div>

<div class="main">

<div class="topbar">
<h2>Manage Student Results</h2>
</div>

<div class="table-box">

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Department</th>
<th>Marks</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($res)){ ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['department']; ?></td>
<td><?php echo $row['marks']; ?></td>
<td>
<a class="edit"
href="edit_result.php?sno=<?php echo $row['sno']; ?>">
Edit
</a>
</a>
</td>
</tr>
<?php } ?>

</table>

</div>

</div>

</body>
</html>