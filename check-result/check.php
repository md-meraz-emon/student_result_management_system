<?php
include("connect3.php");

if(isset($_POST["check"])){

$user_id = $_POST["id"];
$name = $_POST["name"];
$department = $_POST["department"];
$subject = $_POST["subject"];

$query = "SELECT * FROM submit_result 
WHERE id='$user_id'
AND name='$name'
AND department='$department'
AND subject='$subject'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){

$row = mysqli_fetch_assoc($result);

$marks = $row["marks"];

if($marks >= 80){
$grade="A+";
}
elseif($marks >= 70){
$grade="A";
}
elseif($marks >= 60){
$grade="B";
}
elseif($marks >= 50){
$grade="C";
}
else{
$grade="F";
}

echo "
<html>
<head>
<link rel='stylesheet' href='style.css'>
</head>

<body class='main'>

<div class='result-card'>

<h2>Result Found</h2>

<p>Name: ".$row['name']."</p>
<p>ID: ".$row['id']."</p>
<p>Department: ".$row['department']."</p>
<p>Subject: ".$row['subject']."</p>
<p>Marks: ".$marks."</p>
<p>Grade: ".$grade."</p>

<button onclick='window.print()'>Download Result</button>

</div>

</body>
</html>
";

}else{
echo "<h3 style='color:red;text-align:center;'>Result Not Found</h3>";
}

}
?>