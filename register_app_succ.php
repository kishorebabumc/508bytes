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
