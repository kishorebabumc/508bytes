<?php
include("config.php");
$mail = $_POST['mail'];
$remarks3 = $_POST["remarks3"];
$interview_marks = $_POST["interview_marks"];
$updateq = "UPDATE job_applied SET InterviewRemarks = '$remarks3',InterviewMarks = '$interview_marks' WHERE email = '$mail'";
$updateexe = mysqli_query($connection,$updateq);
?>
