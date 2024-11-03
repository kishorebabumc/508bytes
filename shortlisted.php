<?php
include("config.php");
$list = $_POST["list"];
$Gmail = $_POST['gmail'];
$uq = "update job_applied set ShortListed  = '$list' where email = '$Gmail' ";
$ueq = mysqli_query($connection,$uq);
?>
