<?php
include("config.php");


$email = $_POST["email"];
$firstname = $_POST["firstName"];
$lastname = $_POST["lastname"];
$gender = $_POST["Gender"];
$mobileno = $_POST["mobileNo"];
$password =  $_POST["password"];
$otp = random_int(100000, 999999);






$query = "INSERT INTO applicants (email, firstName, lastName,gender, mobileNo, `password`, otp) VALUES ('$email', '$firstname', '$lastname','$gender', '$mobileno', '$password', '$otp')";
$res = mysqli_query($connection, $query);
echo mysqli_error($connection);
if ($query) {
    echo "successfully inserted data";

    
    $subject = "508 Bytes One Time Password for eMail verification";
    $message = "<p>Dear Sir/Madam,<p> <p>".$firstname." ".$lastname.",</p>"."<p>This mail is in reference to the registration in 508 Bytes Career.
    Your One Time Password (OTP) for e-Mail Verification is <h5>".$otp."</h5> </p><p>This is a system generated mail.</p><p>Regards,</p><p>Team 508Bytes</p>";
    // Email headers to specify HTML content
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: support@508bytes.com' . "\r\n";

    // Send email
    if (mail($email, $subject, $message, $headers)) {
        // echo "Email sent successfully.";
        header("location: verify_otp.php?email=$email");
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "not inserted data";
}
?>
