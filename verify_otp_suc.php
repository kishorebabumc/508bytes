<?php
include("config.php");
include("header.php");


$email = $_POST['email'];
$otp = $_POST['otp'];
// $firstname = $_POST["firstName"];
// $lastname = $_POST["lastname"];
// $mobileno = $_POST["mobileNo"];
// $password =  $_POST["password"];
// $otp = random_int(100000, 999999);
$query = "SELECT * FROM applicants WHERE email = '$email' and otp='$otp' ";
$res = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($res);
$dataCount = mysqli_num_rows($res);
if($dataCount == 1){
    $query = mysqli_query($connection,"UPDATE applicants SET verified = 1 WHERE email = '$email' ");
}

?>
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-2">Career</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.php">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Career</li>
            </ul>
        </div>
    </section>
</div>
<!-- //inner banner -->

<!-- contact -->
<section class="w3l-contact py-1" id="contact">
    <div class="container py-lg-1 py-md-1 py-1">
        <div class="text-center mb-sm-2 mb-2">
            <h3 class="title-big">Registration <?php if($dataCount == 1) echo "Successfull."; else echo "failed."; ?></h3>
        </div>
        <div class="mx-auto pt-lg-4 pt-md-5 pt-4" style="max-width:1000px">
            <div class="row contact-block">
                <p class="mt-md-0 mb-4">
                    <?php 
                        if($dataCount == 1){
                            echo "Your credentials are registered successfully and now just <a href='login.php' ><u>click here</u></a> to login";
                        }
                        else{
                            echo "Entered wrong OTP, please re-verify your mail address <a href='verify_otp.php?email=".$email."'><u>click here</u></a>";
                        }
                    ?>
                </p>
                
            </div>
        </div>
    </div>
</section>

<?php
include("footer.php");

?>
