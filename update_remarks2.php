<?php
include("config.php");
$mail = $_POST['mail'];
$remarks2 = $_POST["remarks2"];
$technical_marks = $_POST["technical_marks"];
$updateq = "UPDATE job_applied SET TechnicalAssessment = '$remarks2',TechnicalMarks = '$technical_marks' WHERE email = '$mail'";
$updateexe = mysqli_query($connection,$updateq);
?>
