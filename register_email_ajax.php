<?php
    include("config.php");
    
    $email = $_POST['mail'];
    $query = "SELECT * FROM applicants WHERE email = '$email'";
    $execute = mysqli_query($connection, $query);
    $data = mysqli_fetch_assoc($execute);
    $count = mysqli_num_rows($execute);
    if($count > 0){
        echo 1;
        echo "*";
        echo $data['verified'];        
    }
    else {
        echo 0;
        echo "*";        
    }    
    

?>
