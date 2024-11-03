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

        <section id="tabs" class="project-tab">
            <div class="container">
                <div class="col-md-12">
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
                                <tr>
                                    <th>Email</th>
                                    <td id="email"><?php echo $fetch_data['email']; ?></td>
                                    <th>DateOfBirth</th>
                                    <td><?php echo $fetch_data['DateOfBirth']; ?></td>
                                </tr>

                                <tr>
                                    <th>Gender</th>
                                    <td><?php echo $fetch_data['gender']; ?></td>
                                    <th>Mobile No</th>
                                    <td><?php echo $fetch_data['mobileNo']; ?></td>
                                </tr>
                                <tr>
                                    <th>Qualification</th>
                                    <td><?php echo $fetch_data['Qualification']; ?></td>
                                    <th>Skills</th>
                                    <td><?php echo $fetch_data['Skills']; ?></td>
                                </tr>
                                <tr>
                                    <th>Languages</th>
                                    <td><?php echo $fetch_data['Languages']; ?></td>
                                    <th>Address</th>
                                    <td><?php echo $fetch_data['Address']; ?></td>
                                </tr>
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
                                        <a href="view_file.php?name=<?php echo $fetch_data['FileName']; ?>" class="btn btn-primary" target="_blank">Download</a>
                                    </td>
                                    <th id="success" colspan="2">Updated Successfully</th>
                                </tr>
                                </tr>
                            </table>
                            <div class="mt-5" id="remark">
                                <div>
                                    <label for="">Remarks</label>
                                    <div class="d-flex">
                                        <textarea class="form-control" name="Remarks" id="remarks"><?php echo $fetch_data['Remarks']; ?></textarea>
                                        <div class="d-flex ml-3 align-items-end">
                                            <button type="button" class="btn btn-primary" onclick="upDate()">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5" id="remarks-1">
                                <div>
                                    <label for="">Logical Assessment</label>
                                    <div class="d-flex">
                                        <textarea class="form-control" name="Remarks" id="remarks1"><?php echo $fetch_data['LogicalAssessment']; ?></textarea>
                                        <div class="d-flex ml-3 align-items-center">
                                            <input type="number" value="<?php echo $fetch_data['LogicalMarks']; ?>" style="height:60px;" id="logical_marks" class="form-control" placeholder="Enter Marks">
                                        </div>
                                        <div class="d-flex ml-3 align-items-end">
                                            <button type="button" class="btn btn-primary" onclick="upDate1()">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5" id="remarks-2">
                                <div>
                                    <label for="">Techanical Assessment</label>
                                    <div class="d-flex">
                                        <textarea class="form-control" name="Remarks" id="remarks2"><?php echo $fetch_data['TechnicalAssessment']; ?></textarea>
                                        <div class="d-flex ml-3 align-items-center">
                                            <input type="number"  value="<?php echo $fetch_data['TechnicalMarks']; ?>"style="height:60px;" id="technical_marks" class="form-control" placeholder="Enter Marks">
                                        </div>
                                        <div class="d-flex ml-3 align-items-end">
                                            <button type="button" class="btn btn-primary" onclick=" upDate2()">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5" id="remarks-3">
                                <div>
                                    <label for="">Interview Remarks</label>
                                    <div class="d-flex">
                                        <textarea class="form-control" name="Remarks" id="remarks3"><?php echo $fetch_data['InterviewRemarks']; ?></textarea>
                                        <div class="d-flex ml-3 align-items-center">
                                            <input type="number" value="<?php echo $fetch_data['InterviewMarks']; ?>" style="height:60px;" id="interview_marks" class="form-control" placeholder="Enter Marks">
                                        </div>
                                        <div class="d-flex ml-3 align-items-end">
                                            <button type="button" class="btn btn-primary" onclick="upDate3()">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <a href="profile.php"><button type="button" class="btn btn-info ml-3">Back</button></a>
                            </div>
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
        // document.getElementById("success").style.display = "none";
        // document.getElementById("remarks-1").style.display = "none";
        // document.getElementById("remarks-2").style.display = "none";
        // document.getElementById("remarks-3").style.display = "none";

        <?php // if (!is_null($fetch_data['LogicalAssessment'])) { ?>
            // document.getElementById("remarks-1").style.display = "block";
            // document.getElementById("remarks-2").style.display = "block";
            // document.getElementById("remarks-3").style.display = "block";
        <?php // } elseif (!is_null($fetch_data['Remarks'])) { ?>
            // document.getElementById("remarks-1").style.display = "block";
        <?php // } ?>
        function upDate() {
            var remarks = document.getElementById("remarks").value;
            var mail = document.getElementById("email").innerText;
            $.ajax({
                url: "update_remarks.php",
                method: "post",
                data: {
                    remarks,
                    mail
                },
                success: function(result) {
                    
                    document.getElementById("success").style.display = "table-cell";
                    document.getElementById("success").colSpan = 2;
                    // document.getElementById("remarks-1").style.display = 'block';
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error:', textStatus, errorThrown);
                    alert('An error occurred: ' + errorThrown);
                }
            })
        }

        function upDate1() {
            var remarks1 = document.getElementById("remarks1").value;
            var logical_marks = document.getElementById("logical_marks").value;
            var mail = document.getElementById("email").innerText;
            $.ajax({
                url: "update_remarks1.php",
                method: "post",
                data: {
                    remarks1,
                    logical_marks,
                    mail
                },
                success: function(result1) {                
                    document.getElementById("success").style.display = "table-cell";
                    document.getElementById("success").colSpan = 2;
                    // document.getElementById("remarks-2").style.display = 'block';
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error:', textStatus, errorThrown);
                    alert('An error occurred: ' + errorThrown);
                }
            })


        }

        function upDate2() {
            var remarks2 = document.getElementById("remarks2").value;
            var technical_marks = document.getElementById("technical_marks").value;
            var mail = document.getElementById("email").innerText;
            $.ajax({
                url: "update_remarks2.php",
                method: "post",
                data: {
                    remarks2,
                    technical_marks,
                    mail
                },
                success: function(result2) {                    
                    document.getElementById("success").style.display = "table-cell";
                    // document.getElementById("remarks-3").style.display = "block";
                    document.getElementById("success").colSpan = 2;
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error:', textStatus, errorThrown);
                    alert('An error occurred: ' + errorThrown);
                }
            })
        }

        function upDate3() {
            var remarks3 = document.getElementById("remarks3").value;
            var interview_marks = document.getElementById("interview_marks").value;
            var mail = document.getElementById("email").innerText;
            $.ajax({
                url: "update_remarks3.php",
                method: "post",
                data: {
                    remarks3,
                    interview_marks,
                    mail
                },
                success: function(result3) {                    
                    document.getElementById("success").style.display = "table-cell";                    
                    document.getElementById("success").colSpan = 2;
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error:', textStatus, errorThrown);
                    alert('An error occurred: ' + errorThrown);
                }
            })
        }
    </script>