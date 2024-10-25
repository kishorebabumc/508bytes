<?php

include("session.php");
include("config.php");

$_SESSION['Page'] = 'career';

$email = $_SESSION['Email'];
$JobID = $_POST['JobID'];

$InfoQ = "SELECT * FROM job_applied WHERE JobID = '$JobID' AND email = '$email'";
$InfoCount = mysqli_num_rows(mysqli_query($connection, $InfoQ));
if($InfoCount > 0){
    echo "Already Applied";
}else{
    $query = "INSERT INTO job_applied (JobID, email) VALUES ('$JobID', '$email')  ";
    $insert = mysqli_query($connection, $query);
    echo mysqli_error($connection);
    if($insert){
        echo "Applied Successfully";
    }else{
        echo "Applied Failed";
    }
}
?>