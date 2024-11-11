<?php

use function PHPUnit\Framework\isNull;

include('session.php');
if (!isset($_SESSION['Email'])) {
    header("location: career.php");
}
include("header.php");
include("config.php");
$email = $_SESSION['Email'];
$sel = "SELECT * FROM applicants left join personal_info on applicants.email = personal_info.email where applicants.email = '$email'";
$exe = mysqli_query($connection, $sel);
$ret = mysqli_fetch_assoc($exe);
$sele = "SELECT * FROM jobs LEFT JOIN job_applied ON jobs.JobID = job_applied.JobID WHERE email = '$email'";
$exec = mysqli_query($connection, $sele);

$qjob = "SELECT * FROM jobs";
$resjob = mysqli_query($connection, $qjob);

$japp = "SELECT applicants.id, applicants.email as appid, applicants.firstName, applicants.lastName, applicants.mobileNo as Mobile, applicants.verified, personal_info.*, personal_info.email AS profileup, job_applied.email as applied, job_applied.Remarks, job_applied.Attended FROM applicants LEFT JOIN personal_info ON personal_info.email = applicants.email LEFT JOIN job_applied ON job_applied.email = applicants.email WHERE applicants.verified = 1 AND applicants.isAdmin != 1 ";
$jres = mysqli_query($connection, $japp);

# for Interviewed candidates
$Attend = "SELECT firstName, lastName, ShortListed, personal_info.mobileNo,job_applied.email as applied,job_applied.LogicalAssessment, job_applied.LogicalMarks, job_applied.TechnicalAssessment,job_applied.TechnicalMarks,job_applied.InterviewRemarks,job_applied.InterviewMarks FROM job_applied
INNER JOIN personal_info ON job_applied.email = personal_info.email
INNER JOIN applicants ON job_applied.email = applicants.email
WHERE job_applied.Attended = 'yes'";
$Aexe = mysqli_query($connection, $Attend);

# For short listed candidates
$short = "SELECT firstName,ShortListed,applicants.email,JobID FROM job_applied INNER JOIN applicants on job_applied.email  = applicants.email where ShortListed = 'Yes'";
$shortq = mysqli_query($connection, $short);

# for Final Candidates
$final = "SELECT firstName, job_applied.email,mobileNo FROM job_applied INNER JOIN applicants on job_applied.email  = applicants.email where ShortListed = 'Yes'";
$final_Exe = mysqli_query($connection, $final);
?>
<style>
    .project-tab {
        padding: 10%;
        margin-top: -8%;
    }

    .project-tab #tabs {
        background: #007b5e;
        color: #eee;
    }

    .project-tab #tabs h6.section-title {
        color: #eee;
    }

    .project-tab #tabs .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #0062cc;
        background-color: transparent;
        border-color: transparent transparent #f3f3f3;
        border-bottom: 3px solid !important;
        font-size: 16px;
        font-weight: bold;
    }

    .project-tab .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        color: #0062cc;
        font-size: 16px;
        font-weight: 600;
    }

    .project-tab .nav-link:hover {
        border: none;
    }

    .project-tab thead {
        background: #f3f3f3;
        color: #333;
    }

    .project-tab a {
        text-decoration: none;
        color: #333;
        font-weight: 600;
    }
</style>

<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-2"><?php if ($ret['isAdmin'] == 1) { ?>Applicants Details <?php } else { ?>Profile Details <?php } ?></h4>
            <div class="profile-img d-flex justify-content-center pb-5 mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
            </div>
        </div>
    </section>
</div>



<div class="area-box">
    <!-- <div class="col-md-12 mt-md-0 mt-4" style="align-items: center;"> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <?php if ($ret['isAdmin'] == 1) { ?>
        <section id="tabs" class="project-tab">
            <div class="container">

                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Applicants</a>
                            <a class="nav-item nav-link" id="stage-2-tab" data-toggle="tab" href="#stage-2" role="tab" aria-controls="stage-2" aria-selected="false">Interviewed</a>
                            <a class="nav-item nav-link" id="stage-3-tab" data-toggle="tab" href="#stage-3" role="tab" aria-controls="stage-3" aria-selected="false">Short Listed</a>
                            <a class="nav-item nav-link" id="stage-4-tab" data-toggle="tab" href="#stage-4" role="tab" aria-controls="stage-4" aria-selected="false">Final Candidates</a>
                            <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Others</a> -->
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <table class="table  mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl No</th>
                                        <th scope="col">Name of the Applicant</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Applied</th>
                                        <th scope="col">Personal Info</th>
                                        <th scope="col">Resume</th>
                                        <th scope="col">Remarks</th>
                                        <th scope="col">Attended</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    while ($render = mysqli_fetch_assoc($jres)) {
                                        $i++;  ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><a href="applicant_details.php?email=<?php echo $render['appid']; ?>"><?php echo $render['firstName'] . " " . $render['lastName']; ?></a></td>
                                            <td><?php echo $render['appid']; ?></td>
                                            <td><?php echo $render['Mobile']; ?></td>
                                            <td><?php echo $render['Address'] . ", " . $render['City']; ?></td>
                                            <td><?php echo isset($render['applied']) ? "Yes" : ""; ?></td>
                                            <td><?php echo isset($render['profileup']) ? "Yes" : "";; ?></td>
                                            <td><?php if (isset($render['FileName'])) {
                                                    echo '<a class="btn btn-primary" href="uploads/' . $render['FileName'] . '" download>View</a>';
                                                } ?></td>
                                            <td><?php echo $render['Remarks'] ?></td>
                                            <td id="In-visible">
                                                <?php
                                                if (is_null($render['Attended']) && isset($render['applied'])) { ?>
                                                    <i class="fa-solid fa-check text-success" onclick="updateAttendence('<?php echo $render['appid']; ?>','Yes')"></i>
                                                    /
                                                    <i class="fa-solid fa-xmark text-danger" onclick="updateAttendence('<?php echo $render['appid']; ?>','No')"></i>
                                                <?php } else {
                                                    echo $render['Attended'];
                                                } ?>


                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="stage-2" role="tabpanel" aria-labelledby="stage-2-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">SI NO</th>
                                        <th scope="col">Name Of The Applicant</th>
                                        <th scope="col">Logical Assessment</th>
                                        <th scope="col">Score</th>
                                        <th scope="col">Technical Assessment</th>
                                        <th scope="col">Score</th>
                                        <th scope="col"> Interview Remarks</th>
                                        <th scope="col">Score</th>

                                        <th scope="col">Short Listed</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $j = 0;
                                    while ($fetchrows = mysqli_fetch_assoc($Aexe)) {
                                        $j++; ?>
                                        <tr>
                                            <td><?php echo $j; ?></td>
                                            <td><a href="applicant_details.php?email=<?php echo $fetchrows['applied']; ?>"><?php echo $fetchrows['firstName'] . " " . $fetchrows['lastName']; ?></a></td>
                                            <!-- <td><?php // echo $fetchrows['firstName'] . " " . $fetchrows['lastName']; 
                                                        ?></td> -->
                                            <td><?php echo $fetchrows['LogicalAssessment']
                                                ?></td>
                                            <td><?php echo $fetchrows['LogicalMarks']
                                                ?></td>
                                            <td><?php echo $fetchrows['TechnicalAssessment']
                                                ?></td>
                                            <td><?php echo $fetchrows['TechnicalMarks']
                                                ?></td>
                                            <td><?php echo $fetchrows['InterviewRemarks']
                                                ?></td>
                                            <td><?php echo $fetchrows['InterviewMarks']
                                                ?></td>
                                            <td>
                                                <?php if (is_null($fetchrows['ShortListed'])) { ?>
                                                    <i class="fa-solid fa-check text-success" onclick="shortList('Yes','<?php echo $fetchrows['applied'] ?>')"></i>
                                                    /
                                                    <i class="fa-solid fa-xmark text-danger" onclick="shortList('No','<?php echo $fetchrows['applied'] ?>')"></i>
                                                <?php } else {
                                                    echo $fetchrows['ShortListed'];
                                                } ?>
                                            </td>
                                        <?php } ?>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="stage-3" role="tabpanel" aria-labelledby="stage-3-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">SI NO</th>
                                        <th scope="col">Name Of The Applicant</th>
                                        <th scope="col">Final Candidates</th>
                                        <th>Hired</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $k = 0;
                                    while ($short_fetch = mysqli_fetch_assoc($shortq)) {
                                        $k++;
                                    ?>
                                        <tr>
                                            <td><?php echo $k; ?></td>
                                            <td><?php echo $short_fetch['firstName'] ?></td>
                                            <td>
                                                <?php if (is_null($short_fetch['ShortListed'])) { ?>
                                                    <i class="fa-solid fa-check text-success"></i>
                                                    /
                                                    <i class="fa-solid fa-xmark text-danger"></i>
                                                <?php } else { ?>
                                                <?php echo $short_fetch['ShortListed'];
                                                } ?>
                                            </td>
                                            <td>
                                                <input type="file" id="upload-file" onchange="uploadFile(this,'<?php echo $short_fetch['email'];?>','<?php echo $short_fetch['JobID'];?>')">
                                                <button class="btn btn-primary active">Download</button>
                                            </td>
                                        <?php } ?>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="stage-4" role="tabpanel" aria-labelledby="stage-3-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">SI NO</th>
                                        <th scope="col">Name Of The Applicant</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <!-- <th scope="col">Address</th> -->
                                        <!-- <th scope="col">Applied</th> -->
                                        <!-- <th scope="col">Persnol Info</th> -->
                                        <th scope="col">Selected</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $a = 0;
                                    while ($final_fetch = mysqli_fetch_assoc($final_Exe)) {
                                        $a++;
                                    ?>
                                        <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $final_fetch['firstName'] ?></td>
                                            <td><?php echo $final_fetch['email'] ?></td>
                                            <td><?php echo $final_fetch['mobileNo'] ?></td>
                                        <?php } ?>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="row">
            <div class="col-md-2 ">
                <?php while ($drop = mysqli_fetch_assoc($resjob)) { ?>
                    <div class="card ms-3 me-3 mt-3 p-3">
                        <span><?php echo $drop['Description']; ?></span>
                    </div>
                <?php } ?>
            </div>

            <div class="col-md-10">
                
            </div>

        </div> -->
    <?php } else { ?>

        <section id="tabs" class="project-tab">
            <div class="container">

                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Jobs</a>
                            <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Others</a> -->
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="profile-img d-flex justify-content-center pb-5 mt-4"></div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-6">
                                    <input type="text" name="firstName" class="form-control" id="inputFirstName" value="<?php echo $ret['firstName']  ?>" autocomplete="off" disabled>
                                </div>
                                <div class="col-sm-2">
                                    <a href="modify_info.php"><button style="background-color:#EA6E23; color:white; border-radius:10px; padding:10px; border:none; outline:none;">Profile Update</button></a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-6">
                                    <input type="text" name="lastName" class="form-control" id="inputLastName" value="<?php echo $ret['lastName'] ?>" autocomplete="off" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="MobileNo" class="col-sm-2 col-form-label">Mobile No.</label>
                                <div class="col-sm-6">
                                    <input type="text" name="mobileNo" minlength="10" maxlength="10" class="form-control" id="MobileNo" placeholder="Mobile Number" value="<?php echo $ret['mobileNo'] ?>" utocomplete="off" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="EmailAddress" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control" id="EmailAddress" value="<?php echo $ret['email'] ?>" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="Qualification" class="col-sm-2 col-form-label">Qualification</label>
                                <div class="col-sm-6">
                                    <select name="Qualification" id="Qualification" class="form-control" required disabled>
                                        <option><?php echo $ret['Qualification']; ?> </option>
                                        <option>10th </option>
                                        <option>12th </option>
                                        <option>Degree</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="EmailAddress" class="col-sm-2 col-form-label">Resume</label>

                                <div class="col-sm-2">
                                    <a class="btn btn-primary" href="uploads/<?php echo $ret['FileName']; ?>" download>Download</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Date Of Birth</label>
                                <div class="col-sm-3">
                                    <input type="date" name="DateOfBirth" value="<?php echo $ret['DateOfBirth']; ?>" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Skills</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="Skills" id="" cols="30" rows="3" placeholder="Type a skill" disabled><?php echo $ret['Skills']; ?></textarea>
                                    <!-- <input type="text" id="skillInput"  /> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Languages</label>
                                <div class="col-sm-6">
                                    <input type="text" id="skillInput" name="Languages" class="form-control" placeholder="Type Known Languages" value="<?php echo $ret['Languages']; ?>" disabled />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="Address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-6">
                                    <input type="text" id="Address" class="form-control" name="Address" placeholder="Enter Your Address" value="<?php echo $ret['Address']; ?>" disabled />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="City" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-6">
                                    <input type="text" id="City" name="City" class="form-control" placeholder="Enter City " value="<?php echo $ret['City']; ?>" disabled />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="State" class="col-sm-2 col-form-label">State</label>
                                <div class="col-sm-6">
                                    <input type="text" id="State" name="State" class="form-control" placeholder="Enter State" value="<?php echo $ret['State']; ?>" disabled />
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="p-10">Id</th>
                                        <th>Applied job</th>
                                        <th>Short Listed</th>
                                        <th>DownLoad Offer Letter</th>
                                        <th>Upload Offer Letter(Signed)</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    while ($rete = mysqli_fetch_assoc($exec)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $rete['JobID']; ?></td>
                                            <td><?php echo $rete['Description']; ?></td>
                                            <td><?php echo $rete['ShortListed']; ?></td>
                                            <?php if ($rete['ShortListed'] == 'Yes') { ?>
                                                <td>
                                                    <a href="<?php echo $rete['OfferLetter']; ?>" class="btn btn-success" download = "offer_letter">Download</a>
                                                </td>
                                            <?php } else { ?>

                                            <?php } ?>

                                            <?php if ($rete['ShortListed'] == 'Yes') { ?>
                                                <td>
                                                    <input type="file">
                                                    <button class="btn btn-primary">Upload</button>
                                                </td>
                                            <?php } else { ?>

                                            <?php } ?>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Contest Name</th>
                                        <th>Date</th>
                                        <th>Award Position</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">Work 1</a></td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Work 2</a></td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Work 3</a></td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
</div>


<?php
include("footer.php");
?>
<script>
    function updateAttendence(email, type) {
        $.ajax({
            url: "update_attendence.php",
            method: "post",
            data: {
                email,
                type
            },
            success: function(res) {

            }


        })
    }

    function shortList(list, gmail) {
        $.ajax({
            url: "shortlisted.php",
            method: "post",
            data: {
                list,
                gmail
            },
            success: function(response) {

            }

        })
    }

    function uploadFile(that,email,JobID) {
        alert("hi")
        // var upload = document.getElementById("upload-file").value;
        const file = that.files[0];
        const allowedExtensions = /(\.pdf|\.doc|\.docx)$/i;
        const maxSize = 3 * 1024 * 1024; // 2 MB in bytes

        if (!allowedExtensions.exec(file.name)) {
            alert("Please upload only PDF or Word documents.");
            that.value = ""; // Clear the input
            return;
        }

        if (file.size > maxSize) {
            alert("File size must be under 3 MB.");
            that.value = ""; // Clear the input
        }

        var formData = new FormData();
       
        formData.append('file', file);
        formData.append('Email', email);
        formData.append('JobID', JobID);
        

        $.ajax({
          url: 'offer_letter.php', // The server-side script that handles the upload
          type: 'POST',
          data: formData,
          processData: false, // Prevent jQuery from processing the data
          contentType: false, // Prevent jQuery from setting content-type header
          success: function(response) {
            alert('File uploaded successfully!');
            console.log(response);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert('File upload failed: ' + textStatus + ' ' + errorThrown);
          }
        });
    }
    const inputElement = document.getElementById("EmailAddress");
    const originalValue = inputElement.value;

    Object.defineProperty(inputElement, 'value', {
        get: () => originalValue,
        set: () => originalValue, // Ignore any attempt to change
        configurable: false,

    });
</script>