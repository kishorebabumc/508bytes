<?php
include("config.php");
$type = $_POST['type'];
$mail = $_POST['email'];
$updateq = "UPDATE job_applied SET Attended = '$type' WHERE email = '$mail'";
$updateexe = mysqli_query($connection,$updateq); 
?>
