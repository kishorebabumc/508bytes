<?php
include("session.php");
include("config.php");

// $_SESSION['Page'] = 'career';

$email = $_POST['Email'];
$JobID = $_POST['JobID'];
// $mobileNo = $_POST['mobileNo'];
// $Qualification = $_POST['Qualification'];
// $DateOfBirth = $_POST['DateOfBirth'];
// $Skills = $_POST['Skills'];
// $Languages = $_POST['Languages'];
// $Address = $_POST['Address'];
// $City = $_POST['City'];
// $State = $_POST['State'];


// $JobID = $_POST['JobID'];
// Define the target directory where files will be saved
$targetDirectory = "uploads/";
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true); // Create the directory if it doesn't exist
}

$uploadOk = true;

// Check if file was uploaded without errors
if ($_FILES["file"]["error"] != 0) {
    echo "Error during file upload.";
    $uploadOk = false;
}

// Check file size (limit to 2 MB)
if ($_FILES["file"]["size"] > 3 * 1024 * 1024) {
    echo "File size must be less than 3 MB.";
    $uploadOk = false;
}

// Allow specific file formats (PDF and Word documents)
$allowedTypes = ['application/pdf'];
if (!in_array($_FILES["file"]["type"], $allowedTypes)) {
    echo "Only PDF and Word files are allowed.";
    $uploadOk = false;
}
// Generate a new unique name for the file
$fileExtension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION); // Get the file extension
$newFileName = $email . '_offer_letter.' . $fileExtension; // Generate a unique file name
$targetFile = $targetDirectory . $newFileName; // Define the target path with new name

// Check if $uploadOk is true before moving the file

$PerInfoQ = "UPDATE job_applied SET OfferLetter ='$targetFile' WHERE email='$email' AND JobID ='$JobID'";
$PerInfo = mysqli_query($connection, $PerInfoQ);



if ($uploadOk && move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    echo "The file has been uploaded successfully as " . $newFileName;
} else {
    echo "File upload failed.";
}




?>