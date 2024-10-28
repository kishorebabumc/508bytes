<?php
include("config.php");
$mail = $_POST['mail'];
$remarks = $_POST["remarks"];
$updateq = "UPDATE job_applied SET Remarks = '$remarks' WHERE email = '$mail'";
$updateexe = mysqli_query($connection,$updateq); 
?>
