<?php
include("config.php");
include("header.php");


$email = $_POST["email"];
$firstname = $_POST["firstName"];
$lastname = $_POST["lastname"];
$mobileno = $_POST["mobileNo"];
$password =  $_POST["password"];
$otp = random_int(100000, 999999);


$query = "INSERT INTO applicants (email, firstName, lastName, mobileNo, password,otp) VALUES ('$email', '$firstname', '$lastname', '$mobileno', '$password', '$otp')";
$res = mysqli_query($connection, $query);
echo mysqli_error($connection);
if ($query) {
    echo "successfully inserted data";

    
    $subject = "508 Bytes One Time Password for eMail verification";
    $message = "<p>Dear Sir/Madam,<p> <p>".$firstname." ".$lastname.",</p>"."<p>This mail is in reference to the registration in 508 Bytes Career.
    Your One Time Password (OTP) for e-Mail Verification is".$otp." </p><p>This is a system generated mail.</p><p>Regards,</p><p>Team 508Bytes</p>";
    $headers = "From: support@508bytes.com";

    // Send email
    if (mail($email, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "not inserted data";
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
            <h3 class="title-big">Registration Verification</h3>
        </div>
        <div class="mx-auto pt-lg-4 pt-md-5 pt-4" style="max-width:1000px">
            <div class="row contact-block">
                <p>To Complete the Registration process please verify your e-Mail by using OTP sent to registered mail address</p>
                <div class="col-md-7 mt-md-0 mt-4">
                    <form method="POST" action="register_app_succ.php">
                        <div class="form-group row">
                            <label for="inputFirstName" class="col-sm-4 col-form-label">e-Mail Address</label>
                            <div class="col-sm-8">
                                <input type="text" value="<?php echo $email; ?>" class="form-control" id="inputFirstName" placeholder="First Name" autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLastName" class="col-sm-4 col-form-label">Enter OTP</label>
                            <div class="col-sm-8">
                                <input type="text" name="lastname" class="form-control" id="inputLastName" placeholder="OTP"  autocomplete="off" required>
                            </div>
                        </div>                        
                        <button type="" class="btn button-style" >Submit</button>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>
