<?php
include("config.php");


$email = $_GET["email"];
// $firstname = $_POST["firstName"];
// $lastname = $_POST["lastname"];
// $mobileno = $_POST["mobileNo"];
// $password =  $_POST["password"];
// $otp = random_int(100000, 999999);





$query = "SELECT * FROM applicants WHERE email = '$email' ";
$res = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($res);
$dataCount = mysqli_num_rows($res);
if($dataCount == 0){
    header("location: register_app.php");
}
echo mysqli_error($connection);
include("header.php");

// if ($query) {
//     echo "successfully inserted data";

    
//     $subject = "508 Bytes One Time Password for eMail verification";
//     $message = "<p>Dear Sir/Madam,<p> <p>".$firstname." ".$lastname.",</p>"."<p>This mail is in reference to the registration in 508 Bytes Career.
//     Your One Time Password (OTP) for e-Mail Verification is <h5>".$otp."</h5> </p><p>This is a system generated mail.</p><p>Regards,</p><p>Team 508Bytes</p>";
//     // Email headers to specify HTML content
//     $headers = "MIME-Version: 1.0" . "\r\n";
//     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//     // Additional headers
//     $headers .= 'From: support@508bytes.com' . "\r\n";

//     // Send email
//     if (mail($email, $subject, $message, $headers)) {
//         echo "Email sent successfully.";
//     } else {
//         echo "Failed to send email.";
//     }
// } else {
//     echo "not inserted data";
// }
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
            <h3 class="title-big">Registration Verification</h3>
        </div>
        <div class="mx-auto pt-lg-4 pt-md-5 pt-4" style="max-width:1000px">
            <div class="row contact-block">
                <p class="mt-md-0 mb-4">To Complete the Registration process please verify your e-Mail by using OTP sent to registered mail address, if you are not received e-Mail, please check spam / junk folder. Still not received please drop a mail to support@508bytes.com</p>
                <div class="col-md-7 mt-md-0 mt-4">
                    <form method="POST" action="verify_otp_suc.php">
                        <div class="form-group row">
                            <label for="inputFirstName" class="col-sm-3 col-form-label">e-Mail Address</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $data['email']; ?>" name="email" class="form-control" id="Email" placeholder="e-Mail" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLastName" class="col-sm-3 col-form-label">Enter OTP</label>
                            <div class="col-sm-5">
                                <input type="text" name="otp" class="form-control" id="inputLastName" placeholder="OTP"  autocomplete="off" required>
                            </div>
                            <div class="col-sm-4">
                                <button onclick="ResendOTP()" id="resendotp" class="btn btn-success">Re-Send OTP</button>
                                <p class="text-center text-danger" id="timer"></p>
                            </div>

                        </div>                        
                        <button type="submit" class="btn button-style" >Submit</button>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("footer.php");

?>

<script>
function ResendOTP(){
    var Email = $("#Email").val();
    if(Email){
        $("#resendotp").prop("disabled", true);
        $.ajax({
            url: "resend_otp.php",
            method: "POST",
            data: {email: Email},
            success: function(res){
                if(res == "successfully inserted data"){
                    var time = 60;
                    var IntervalID = setInterval(()=>{
                        $("#timer").text(`00:${--time}`);
                    },1000)
                    
                    setTimeout(()=>{
                        $("#resendotp").prop("disabled", false);        
                        clearInterval(IntervalID);
                        $("#timer").text("");
                    }, time*1000);
                }else{
                    alert("OTP Send Faild");
                }
            }
        });
    }else{
        alert("Please Check Email ID");
    }
}
</script>