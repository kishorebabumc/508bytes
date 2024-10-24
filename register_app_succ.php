<?php
include("config.php");


// $email = $_POST["email"];
// $firstname = $_POST["firstName"];
// $lastname = $_POST["lastname"];
// $mobileno = $_POST["mobileNo"];
// $password =  $_POST["password"];

$email = "kishorebabu.mc@gmail.com";
$firstname = "Kishore";
$lastname = "Babu";


// $appID = mysqli_query($connection, "SELECT MAX(CAST(SUBSTR(App_ID, 4) AS UNSIGNED)) AS maxid FROM applicants");

// $partyid = mysqli_fetch_assoc($appID);
// // $lastid = "P" . ($partyid['maxid'] + 001);
// $lastAppID = "REG" . str_pad(($partyid['maxid'] + 1), 3, '0', STR_PAD_LEFT);


// $query = "INSERT INTO applicants (App_ID, email, firstName, lastName, mobileNo, password) VALUES ('$lastAppID', '$email', '$firstname', '$lastname', '$mobileno', '$password')";
// $res = mysqli_query($connection, $query);
// echo mysqli_error($connection);
// if ($query) {
//     echo "successfully inserted data";

    
    $subject = "One Time Password for eMail verification";
    $message = "Dear Sir/Madam,<br>".$firstname." ".$lastname.",<br>"."This mail is in reference to the registration in 508 Bytes Career.
    Your One Time Password (OTP) for e-Mail Verification is ABE584.<br>This is a system generated mail.<br>Regards,<br>Team 508Bytes";
    $headers = "From: support@508bytes.com";

    // Send email
    if (mail($email, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
// } else {
//     echo "not inserted data";
// }
?>
<?php
include("config.php");


// $email = $_POST["email"];
// $firstname = $_POST["firstName"];
// $lastname = $_POST["lastname"];
// $mobileno = $_POST["mobileNo"];
// $password =  $_POST["password"];

$email = "kishorebabu.mc@gmail.com";
$firstname = "Kishore";
$lastname = "Babu";


// $appID = mysqli_query($connection, "SELECT MAX(CAST(SUBSTR(App_ID, 4) AS UNSIGNED)) AS maxid FROM applicants");

// $partyid = mysqli_fetch_assoc($appID);
// // $lastid = "P" . ($partyid['maxid'] + 001);
// $lastAppID = "REG" . str_pad(($partyid['maxid'] + 1), 3, '0', STR_PAD_LEFT);


// $query = "INSERT INTO applicants (App_ID, email, firstName, lastName, mobileNo, password) VALUES ('$lastAppID', '$email', '$firstname', '$lastname', '$mobileno', '$password')";
// $res = mysqli_query($connection, $query);
// echo mysqli_error($connection);
// if ($query) {
//     echo "successfully inserted data";

    
    $subject = "One Time Password for eMail verification";
    $message = "Dear Sir/Madam,<br>".$firstname." ".$lastname.",<br>"."This mail is in reference to the registration in 508 Bytes Career.
    Your One Time Password (OTP) for e-Mail Verification is ABE584.<br>This is a system generated mail.<br>Regards,<br>Team 508Bytes";
    $headers = "From: support@508bytes.com";

    // Send email
    if (mail($email, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
// } else {
//     echo "not inserted data";
// }
?>
