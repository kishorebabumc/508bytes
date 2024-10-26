<?php
include('session.php');
include("header.php");
include("config.php");
$email = $_SESSION['Email'];
$sel = "SELECT * FROM applicants left join personal_info on applicants.email = personal_info.email where applicants.email = '$email'";
$exe = mysqli_query($connection, $sel);
$ret = mysqli_fetch_assoc($exe);
$sele = "SELECT * FROM jobs INNER JOIN job_applied on jobs.JobID=job_applied.JobID where email ='$email'";
$exec = mysqli_query($connection, $sele);

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
            <h4 class="inner-text-title font-weight-bold mb-2">Profile Details</h4>
        </div>
    </section>
</div>
<div class="area-box">
    <!-- <div class="col-md-12 mt-md-0 mt-4" style="align-items: center;"> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <section id="tabs" class="project-tab">
        <div class="container">
            <div class="row">
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
                            <div class="profile-img d-flex justify-content-center pb-5 mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>
                            </div>
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
                                <!-- <div class="col-sm-4">
            <input type="file" id="fileUpload" name="fileUpload" accept=".pdf, .doc, .docx" atocomplete="off" required>
            <label class="text-danger">* Note: file must be less than 3 MB</label>
        </div> -->
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
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    while ($rete = mysqli_fetch_assoc($exec)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $rete['JobID']; ?></td>
                                            <td><?php echo $rete['Description']; ?></td>
                                            <td>Active</td>
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
        </div>
    </section>


</div>

<!-- <style>
    th,
    td {
        color: black;
        padding: 10px;
        text-align: center;
    }

    table {
        width: 50%;
        /* margin-top:30px */
    }
</style>
<div class="d-flex justify-content-center">
    <table border="1">
        <tr>
            <th class="p-10">Id</th>
            <th>Applied job</th>
            <th>Status</th>
        </tr>
        <?php

        while ($rete = mysqli_fetch_assoc($exec)) {
        ?>
        <tr>
            <td><?php echo $rete['JobID']; ?></td>
            <td><?php echo $rete['Description']; ?></td>
            <td>Active</td>
        </tr>
        <?php } ?>
    </table>
</div> -->
<?php
include("footer.php");
?>