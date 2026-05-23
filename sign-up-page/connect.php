<?php

$conn = mysqli_connect("localhost","root","","student_result_db");
//  $con = mysqli_connect($server, $username, $password);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

// mysqli_close($conn);
?>