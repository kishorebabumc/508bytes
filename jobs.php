<?php
include('session.php');
include("header.php");
include("config.php");
$email = $_SESSION['Email'];
$sel = "SELECT * FROM applicants where email = '$email'";
$exe = mysqli_query($connection, $sel);
$ret = mysqli_fetch_assoc($exe);
$sele = "SELECT * FROM jobs INNER JOIN job_applied on jobs.JobID=job_applied.JobID where email ='$email'";
$exec = mysqli_query($connection, $sele);

?>
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-2">Applied Jobs</h4>
        </div>
    </section>
</div>
<div class="area-box">
    <!-- <div class="col-md-12 mt-md-0 mt-4" style="align-items: center;"> -->

    <!-- <div class="profile-img d-flex justify-content-center pb-5">
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
    </div> -->
</div>
<style>
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
<div class="d-flex justify-content-center mt-4">
    <table border="1">
        
    </table>
</div>
<?php
include("footer.php");
?>