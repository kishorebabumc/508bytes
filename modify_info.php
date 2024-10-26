<?php

include("session.php");
if(!isset($_SESSION['Email'])){
    header("location: career.php");
}
include("config.php");

$_SESSION['Page'] = 'career';

$email = $_SESSION['Email'];
// $JobID = $_GET['JobID'];
$infoquery = "SELECT * FROM applicants LEFT JOIN personal_info ON applicants.email = personal_info.email WHERE applicants.email = '$email' ";
$info = mysqli_fetch_assoc(mysqli_query($connection, $infoquery));

include("header.php");

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
                    <form method="POST" id="reg-form" action="modify_info_succ.php" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="firstName" class="form-control" id="inputFirstName" value="<?php echo $info['firstName']  ?>" autocomplete="off" disabled>
                                <!-- <input type="text" name="JobID" value="<?php // echo $JobID  
                                                                            ?>" hidden> -->

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="lastName" class="form-control" id="inputLastName" value="<?php echo $info['lastName'] ?>" autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="MobileNo" class="col-sm-2 col-form-label">Mobile No.</label>
                            <div class="col-sm-6">
                                <input type="text" name="mobileNo" minlength="10" maxlength="10" class="form-control" id="MobileNo" placeholder="Mobile Number" value="<?php echo $info['mobileNo'] ?>" utocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="EmailAddress" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-6">
                                <input type="email" name="email" class="form-control" id="EmailAddress" value="<?php echo $info['email'] ?>" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="Qualification" class="col-sm-2 col-form-label">Qualification</label>
                            <div class="col-sm-6">
                                <select name="Qualification" id="Qualification" class="form-control" required>
                                    <option><?php echo $info['Qualification']; ?> </option>
                                    <option>10th </option>
                                    <option>12th </option>
                                    <option>Degree</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="EmailAddress" class="col-sm-2 col-form-label">Resume</label>
                            <div class="col-sm-4">
                                <input type="file" id="fileUpload" name="fileUpload" accept=".pdf, .doc, .docx" atocomplete="off" required>
                                <label class="text-danger">* Note: file must be less than 3 MB</label>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-primary" href="uploads/<?php echo $info['FileName']; ?>" download>Download</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="inputPassword" class="col-sm-2 col-form-label">Date Of Birth</label>
                            <div class="col-sm-3">
                                <input type="date" name="DateOfBirth" value="<?php echo $info['DateOfBirth']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="inputPassword" class="col-sm-2 col-form-label">Skills</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="Skills" id="" cols="30" rows="3" placeholder="Type a skill"><?php echo $info['Skills']; ?></textarea>
                                <!-- <input type="text" id="skillInput"  /> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="inputPassword" class="col-sm-2 col-form-label">Languages</label>
                            <div class="col-sm-6">
                                <input type="text" id="skillInput" name="Languages" class="form-control" placeholder="Type Known Languages" value="<?php echo $info['Languages']; ?>" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="Address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-6">
                                <input type="text" id="Address" class="form-control" name="Address" placeholder="Enter Your Address" value="<?php echo $info['Address']; ?>" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="City" class="col-sm-2 col-form-label">City</label>
                            <div class="col-sm-6">
                                <input type="text" id="City" name="City" class="form-control" placeholder="Enter City " value="<?php echo $info['City']; ?>" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2"></label>
                            <label for="State" class="col-sm-2 col-form-label">State</label>
                            <div class="col-sm-6">
                                <input type="text" id="State" name="State" class="form-control" placeholder="Enter State" value="<?php echo $info['State']; ?>" />
                            </div>
                        </div>
                        <center>
                            <button id="submit_btn" type="submit" class="btn button-style" onclick="">Save</button>
                        </center>
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