<?php
include("session.php");
include("config.php");

$_SESSION['Page'] = 'career';

$email = $_SESSION['Email'];
$mobileNo = $_POST['mobileNo'];
$Qualification = $_POST['Qualification'];
$DateOfBirth = $_POST['DateOfBirth'];
$Skills = $_POST['Skills'];
$Languages = $_POST['Languages'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];


// $JobID = $_POST['JobID'];
// Define the target directory where files will be saved
$targetDirectory = "uploads/";
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true); // Create the directory if it doesn't exist
}

$uploadOk = true;

// Check if file was uploaded without errors
if ($_FILES["fileUpload"]["error"] != 0) {
    echo "Error during file upload.";
    $uploadOk = false;
}

// Check file size (limit to 2 MB)
if ($_FILES["fileUpload"]["size"] > 3 * 1024 * 1024) {
    echo "File size must be less than 3 MB.";
    $uploadOk = false;
}

// Allow specific file formats (PDF and Word documents)
$allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
if (!in_array($_FILES["fileUpload"]["type"], $allowedTypes)) {
    echo "Only PDF and Word files are allowed.";
    $uploadOk = false;
}

// Generate a new unique name for the file
$fileExtension = pathinfo($_FILES["fileUpload"]["name"], PATHINFO_EXTENSION); // Get the file extension
$newFileName = $email . '.' . $fileExtension; // Generate a unique file name
$targetFile = $targetDirectory . $newFileName; // Define the target path with new name

// Check if $uploadOk is true before moving the file
if ($uploadOk && move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFile)) {
    echo "The file has been uploaded successfully as " . $newFileName;
} else {
    echo "File upload failed.";
}



$email = $_SESSION['Email'];

$PerInfoQ = "SELECT * FROM `personal_info`  WHERE email = '$email'";
$PerInfo = mysqli_query($connection, $PerInfoQ);
$PerInfoCount = mysqli_num_rows($PerInfo);
if($PerInfoCount > 0){
    $personalQ = "UPDATE `personal_info` SET `mobileNo` = '$mobileNo', `Qualification` = '$Qualification', `DateOfBirth` = '$DateOfBirth', `Skills` = '$Skills', `Languages` = '$Languages', `Address` = '$Address', `City` = '$City', `State` = '$State', `FileName` = '$newFileName' WHERE email = '$email'";
    $PerInsert = mysqli_query($connection, $personalQ);
}else{
    $personalQ = "INSERT INTO `personal_info` (`email`, `mobileNo`, `Qualification`, `DateOfBirth`, `Skills`, `Languages`, `Address`, `City`, `State`, `FileName`) VALUES ('$email', '$mobileNo', '$Qualification', '$DateOfBirth', '$Skills', '$Languages', '$Address', '$City', '$State', '$newFileName')";
    $PerInsert = mysqli_query($connection, $personalQ);
}


// $JobIDQ = "INSERT INTO `job_applied` (`email`, `JobID`) VALUES ('$email', '$JobID')";
// $JobIDInsert = mysqli_query($connection, $JobIDQ);

$infoquery = "SELECT * FROM applicants, personal_info WHERE applicants.email = personal_info.email AND personal_info.email = '$email' ";
$info = mysqli_fetch_assoc(mysqli_query($connection, $infoquery));
echo mysqli_error($connection);

include("header.php");

// https://objectstorage.ap-hyderabad-1.oraclecloud.com/p/rFsmHp0NopvZMVzdb5A1FjKYydHpKtytfsFlMsN6LZ9j3BpWNPplCq-kq9z7QJa-/n/axyoenqomux3/b/508BytesResumes/o/
// https://axyoenqomux3.objectstorage.ap-hyderabad-1.oci.customer-oci.com/p/rFsmHp0NopvZMVzdb5A1FjKYydHpKtytfsFlMsN6LZ9j3BpWNPplCq-kq9z7QJa-/n/axyoenqomux3/b/508BytesResumes/o/

?>



<!-- inner banner -->
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
            <h3 class="title-big">User Information</h3>
        </div>
        <div class="mx-auto pt-lg-4 pt-md-5 pt-4" style="max-width:1000px">
            <div class="row contact-block">
                <div class="col-md-12 mt-md-0 mt-4" style="align-items: center;">
                    <form>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="firstName" class="form-control" id="inputFirstName" value="<?php echo $info['firstName']  ?>" autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="lastname" class="form-control" id="inputLastName" value="<?php echo $info['lastName'] ?>" autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="MobileNo" class="col-sm-2 col-form-label">Mobile No.</label>
                            <div class="col-sm-6">
                                <input type="text" name="mobileNo" minlength="10" maxlength="10" class="form-control" id="MobileNo" value="<?php echo $info['mobileNo'] ?>"  placeholder="Mobile Number" utocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="EmailAddress" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-6">
                                <input type="email" name="emailaddress" class="form-control" id="EmailAddress" value="<?php echo $info['email'] ?>" autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="Qualification" class="col-sm-2 col-form-label">Qualification</label>
                            <div class="col-sm-6">
                                <input type="text" name="emailaddress" class="form-control" id="Qualification" value="<?php echo $info['Qualification'] ?>" autocomplete="off" disabled>
                                <!-- <select name="Qualification" id="Qualification" class="form-control" <option value="">Select</option>
                                    <option value="">10th </option>
                                    <option value="">12th </option>
                                    <option value="">Degree</option>
                                </select> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="EmailAddress" class="col-sm-2 col-form-label">Resume</label>
                            <div class="col-sm-6">
                                <input type="file" id="fileUpload" name="emailaddress" accept=".pdf, .doc, .docx" atocomplete="off" disabled>
                                <label class="text-danger">* Note: file must be less than 3 MB</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="inputPassword" class="col-sm-2 col-form-label">Date Of Birth</label>
                            <div class="col-sm-3">
                                <input type="date" value="<?php echo $info['DateOfBirth'] ?>"  class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="inputPassword" class="col-sm-2 col-form-label">Skills</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="" id="" cols="30" rows="3" placeholder="Type a skill" disabled><?php echo $info['Skills'] ?></textarea>
                                <!-- <input type="text" id="skillInput"  /> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="" class="col-sm-2 col-form-label">Languages</label>
                            <div class="col-sm-6">
                                <input type="text" id="" class="form-control" value="<?php echo $info['Languages'] ?>"   disabled/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="Address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-6">
                                <input type="text" id="Address" class="form-control" name="Address" value="<?php echo $info['Address']?>" placeholder="Enter Your Address " disabled/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="City" class="col-sm-2 col-form-label">City</label>
                            <div class="col-sm-6">
                                <input type="text" id="City" name="City" value="<?php echo $info['City']?>" class="form-control" placeholder="Enter City " disabled/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="State" class="col-sm-2 col-form-label">State</label>
                            <div class="col-sm-6">
                                <input type="text" id="State" name="State" value="<?php echo $info['State']?>" class="form-control" placeholder="Enter State " disabled/>
                            </div>
                        </div>
                        <a href="career.php">
                            <button id="submit_btn" type="button" class="btn button-style" onclick="">Back</button>
                        </a>
                    </form>
                </div>
                <script>
                    document.getElementById("fileUpload").addEventListener("change", function() {
                        const file = this.files[0];
                        const allowedExtensions = /(\.pdf|\.doc|\.docx)$/i;
                        const maxSize = 3 * 1024 * 1024; // 2 MB in bytes
                        
                        if (!allowedExtensions.exec(file.name)) {
                            alert("Please upload only PDF or Word documents.");
                            this.value = ""; // Clear the input
                            return;
                        }
                        
                        if (file.size > maxSize) {
                            alert("File size must be under 2 MB.");
                            this.value = ""; // Clear the input
                        }
                    });


                </script>


                <?php
                include("footer.php");
                ?>