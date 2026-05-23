<?php


include("connect2.php");
if(isset($_POST["name"])){
    $name = $_POST["name"];
    $id = $_POST["id"];
    $department = $_POST["department"];
    $subject = $_POST["subject"];
    $marks = $_POST["marks"];

    $query = "INSERT INTO `submit_result` (`name`, `id`, `department`, `subject`, `marks`, `date`) VALUES ( '$name', '$id', '$department', '$subject', '$marks',current_timestamp());";

    if(mysqli_query($conn,$query)){
        header("location:../submit-result/submit_result.php?submit_success= Submit+Success");
        exit();
    }else{
        echo "Wrong Informatoin";
    }
}

?>