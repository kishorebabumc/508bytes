<?php
include("config.php");
$mail = $_POST['mail'];
$remarks1= $_POST["remarks1"];
$logical_marks = $_POST["logical_marks"];
$updateq = "UPDATE job_applied SET LogicalAssessment = '$remarks1',LogicalMarks = '$logical_marks' WHERE email = '$mail'";
$updateexe = mysqli_query($connection,$updateq);
?>
