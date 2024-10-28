<?php
include('header.php');
include('session.php');
include('config.php');
$Email = $_GET['email'];
$selq = "SELECT * FROM `applicants` LEFT JOIN 
personal_info ON personal_info.email = applicants.email 
LEFT JOIN job_applied
ON job_applied.email = applicants.email WHERE applicants.email = '$Email'";
$exeq = mysqli_query($connection, $selq);
echo mysqli_error($connection);
$fetch_data = mysqli_fetch_assoc($exeq);
// $Remarks = $_POST['Reamrks'];
// $updateq = "UPDATE job_applied SET Remarks = '$Remarks'";
// $exeupq = mysqli_query($connection, $updateq);

?>
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-2">Applicants Details</h4>
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
    <div class="col-md-12 mt-md-0 mt-4" style="align-items: center;">
        <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <!-- <section id="tabs" class="project-tab">
            <div class="container">
                <div class="col-md-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="profile-img d-flex justify-content-center pb-5 mt-4"></div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-6">
                                    <input type="text" name="firstName" class="form-control" id="inputFirstName" value="<?php echo $fetch_data['firstName']; ?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-6">
                                    <input type="text" name="lastName" class="form-control" id="inputLastName" value="<?php echo $fetch_data['lastName']; ?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="MobileNo" class="col-sm-2 col-form-label">Mobile No.</label>
                                <div class="col-sm-6">
                                    <input type="text" name="mobileNo" minlength="10" maxlength="10" class="form-control" id="MobileNo" placeholder="Mobile Number" value="<?php echo $fetch_data['mobileNo']; ?>" utocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="EmailAddress" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control" id="EmailAddress" value="<?php echo $fetch_data['email']; ?>" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="Qualification" class="col-sm-2 col-form-label">Qualification</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control" id="EmailAddress" value="<?php echo $fetch_data['Qualification']; ?>" autocomplete="off" readonly>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="EmailAddress" class="col-sm-2 col-form-label">Resume</label>

                                <div class="col-sm-2">
                                    <a class="btn btn-primary" href="uploads/" download>Download</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Date Of Birth</label>
                                <div class="col-sm-3">
                                    <input type="date" name="DateOfBirth" value="<?php echo $fetch_data['DateOfBirth']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Skills</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="Skills" id="" cols="30" rows="3" placeholder="Type a skill"><?php echo $fetch_data['Skills']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Languages</label>
                                <div class="col-sm-6">
                                    <input type="text" id="skillInput" name="Languages" class="form-control" placeholder="Type Known Languages" value="<?php echo $fetch_data['Languages']; ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="Address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-6">
                                    <input type="text" id="Address" class="form-control" name="Address" placeholder="Enter Your Address" value="<?php echo $fetch_data['Address']; ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="City" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-6">
                                    <input type="text" id="City" name="City" class="form-control" placeholder="Enter City " value="<?php echo $fetch_data['City']; ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="State" class="col-sm-2 col-form-label">State</label>
                                <div class="col-sm-6">
                                    <input type="text" id="State" name="State" class="form-control" placeholder="Enter State" value="<?php echo $fetch_data['State']; ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section id="tabs" class="project-tab">
            <div class="container">
                <div class="col-md-12">
                    <!-- <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Jobs</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Others</a>
                        </div>
                    </nav> -->
                    <style>
                        table,
                        th,
                        td {
                            padding: 10px;
                            text-align: left;
                        }

                        th {
                            color: orange;
                        }
                    </style>
                    <div class="tab-content d-flex justify-content-center" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="profile-img d-flex justify-content-center pb-5 mt-4"></div>
                            <table border="1" style="width:500px;   border-radius: 10px;">
                                <tr>
                                    <th colspan="4" style="text-align:center;color:black;">Applicant Full Details</th>
                                </tr>
                                <tr>
                                    <th>First Name</th>
                                    <td><?php echo $fetch_data['firstName']; ?></td>
                                    <th>Last Name</th>
                                    <td><?php echo $fetch_data['lastName']; ?></td>
                                </tr>
                                <!-- <tr>
                                    <th>Last Name</th>
                                    <td><?php //echo $fetch_data['lastName']; 
                                        ?></td>
                                </tr> -->
                                <tr>
                                    <th>Email</th>
                                    <td id="email"><?php echo $fetch_data['email']; ?></td>
                                    <th>DateOfBirth</th>
                                    <td><?php echo $fetch_data['DateOfBirth']; ?></td>
                                </tr>
                                <!-- <tr>
                                    <th>DateOfBirth</th>
                                    <td><?php //echo $fetch_data['DateOfBirth']; 
                                        ?></td>
                                </tr> -->
                                <tr>
                                    <th>Gender</th>
                                    <td><?php echo $fetch_data['gender']; ?></td>
                                    <th>Mobile No</th>
                                    <td><?php echo $fetch_data['mobileNo']; ?></td>
                                </tr>
                                <!-- <tr>
                                        <th>Mobile No</th>
                                    <td><?php //echo $fetch_data['mobileNo']; 
                                        ?></td>
                                </tr> -->
                                <tr>
                                    <th>Qualification</th>
                                    <td><?php echo $fetch_data['Qualification']; ?></td>
                                    <th>Skills</th>
                                    <td><?php echo $fetch_data['Skills']; ?></td>
                                </tr>
                                <!-- <tr>
                                    <th>Skills</th>
                                    <td><?php //echo $fetch_data['Skills']; 
                                        ?></td>
                                </tr> -->
                                <tr>
                                    <th>Languages</th>
                                    <td><?php echo $fetch_data['Languages']; ?></td>
                                    <th>Address</th>
                                    <td><?php echo $fetch_data['Address']; ?></td>
                                </tr>
                                <!-- <tr>
                                    <th>Address</th>
                                    <td><?php //echo $fetch_data['Address']; 
                                        ?></td>
                                </tr> -->
                                <tr>
                                    <th>City</th>
                                    <td><?php echo $fetch_data['City']; ?></td>
                                    <th>State</th>
                                    <td><?php echo $fetch_data['State']; ?></td>
                                </tr>
                                <tr>
                                <tr>
                                    <th>Resume</th>
                                    <td>
                                        <!-- <a href="viewFile.php" target="_blank">Open File in New Tab</a> -->
                                        <a href="view_file.php?name=<?php echo $fetch_data['FileName']; ?>" class="btn btn-primary" target="_blank">Download</a>
                                    </td>
                                    <th id="success" colspan="2" >Updated Successfully</th>
                                </tr>
                                </tr>
                            </table>
                            <div class="mt-5">
                                <div>
                                    <label for="">Remarks</label>
                                    <div class="d-flex">
                                        
                                            <textarea class="form-control" name="Remarks" id ="remarks"></textarea>
                                            <div class="d-flex ml-3 align-items-end">
                                                <button type="button" class="btn btn-primary"  onclick="upDate()" id="update-btn">Update</button>
                                                <a href="profile.php"><button type="button" class="btn btn-info ml-3">Back</button></a>
                                            </div>
                                    </div>
                                    <center id="ups"></center>
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label class="col-sm-0"></label>
                                <label for="inputFirstName" class="col-sm-0 col-form-label">First Name</label>
                                <div class="col-sm-2">
                                    <input type="text" name="firstName" class="form-control" id="inputFirstName" value="<?php echo $fetch_data['firstName']; ?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-6">
                                    <input type="text" name="lastName" class="form-control" id="inputLastName" value="<?php echo $fetch_data['lastName']; ?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="MobileNo" class="col-sm-2 col-form-label">Mobile No.</label>
                                <div class="col-sm-6">
                                    <input type="text" name="mobileNo" minlength="10" maxlength="10" class="form-control" id="MobileNo" placeholder="Mobile Number" value="<?php echo $fetch_data['mobileNo']; ?>" utocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="EmailAddress" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control" id="EmailAddress" value="<?php echo $fetch_data['email']; ?>" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="Qualification" class="col-sm-2 col-form-label">Qualification</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control" id="EmailAddress" value="<?php echo $fetch_data['Qualification']; ?>" autocomplete="off" readonly>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="EmailAddress" class="col-sm-2 col-form-label">Resume</label>

                                <div class="col-sm-2">
                                    <a class="btn btn-primary" href="uploads/" download>Download</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Date Of Birth</label>
                                <div class="col-sm-3">
                                    <input type="date" name="DateOfBirth" value="<?php echo $fetch_data['DateOfBirth']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Skills</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="Skills" id="" cols="30" rows="3" placeholder="Type a skill"><?php echo $fetch_data['Skills']; ?></textarea>
                                    <input type="text" id="skillInput"  /> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Languages</label>
                                <div class="col-sm-6">
                                    <input type="text" id="skillInput" name="Languages" class="form-control" placeholder="Type Known Languages" value="<?php echo $fetch_data['Languages']; ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="Address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-6">
                                    <input type="text" id="Address" class="form-control" name="Address" placeholder="Enter Your Address" value="<?php echo $fetch_data['Address']; ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="City" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-6">
                                    <input type="text" id="City" name="City" class="form-control" placeholder="Enter City " value="<?php echo $fetch_data['City']; ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <label for="State" class="col-sm-2 col-form-label">State</label>
                                <div class="col-sm-6">
                                    <input type="text" id="State" name="State" class="form-control" placeholder="Enter State" value="<?php echo $fetch_data['State']; ?>" />
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    include('footer.php');
    ?>
    <script>
                document.getElementById("success").style.display = "none";

        function upDate() {
        var remarks = document.getElementById("remarks").value;
        var mail = document.getElementById("email").innerText;
        var ups = document.getElementById("ups");
            $.ajax({
            url: "update_remarks.php",
            method: "post",
            data:{
                    remarks,
                    mail
            },
            success: function(result) {   
                // ups.innerText="Updated Successfully"
                document.getElementById("success").style.display = "table-cell";
                document.getElementById("success").colSpan=2;
                document.getElementById("remarks").disabled=true;
                document.getElementById("update-btn").disabled=true;

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('AJAX Error:', textStatus, errorThrown);
                alert('An error occurred: ' + errorThrown);
            }
        })

        
        }
    </script>