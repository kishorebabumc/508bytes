<?php
include('session.php');
$_SESSION['Page'] = 'career';
include("header.php");
if(isset($_GET['jobid'])){
    $jodid = $_GET['jobid'];
    $jobdetailsquery = mysqli_query($connection,"SELECT * FROM `jobs` WHERE JobID = '$jodid'");
    $jobdetails = mysqli_fetch_assoc($jobdetailsquery);
    $jobdescquery = mysqli_query($connection,"SELECT * FROM `JobDesc` WHERE JobID = '$jodid'");
    $jobdesc = mysqli_fetch_assoc($jobdescquery);
    $jobminqua = mysqli_query($connection,"SELECT * FROM `JobMinQua` WHERE JobID = '$jodid'");
    $jobprefqua = mysqli_query($connection,"SELECT * FROM `JobPreQua` WHERE JobID = '$jodid'");

}
?>
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-2">Career</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.php">Home</a></li>
                <li class=" active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Career</li>
            </ul>
        </div>
    </section>
</div>
<section class="w3l-bottom-grids-6 py-1">
    <div class="container py-lg-1 py-md-1">
        <style>
            * {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .job-description {
                line-height: 1.6;
                margin-top: 20px;
            }

            h5 {
                float: left;
                padding: 10px;
            }

            .job-qualification {
                float: left;
            }

            .quali {
                float: left;
                list-style-type: circle;
                margin-left: 5px;
                width: 100%;
            }

            .btn {
                padding: 10px;
            }

            .hove:hover {
                cursor: pointer;
                color: orange;
            }
        </style>
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-12 col-md-12 grids-feature mt-lg-5 mt-4">
                <div class="container">
                    <h4 class="inner-text-title font-weight-bold mb-2">Job Description</h4>
                </div>
                <div class="area-box ">

                    <div>

                        <h4 style="float:left;"><?php echo $jobdetails['Description']; ?></h4>
                        <p class="job-description" style="text-align:left; margin-left:20px; background-color:#E5F3FE;"><?php echo $jobdesc['FullDescription']; ?></p>
                    </div>
                    <div>
                        <h5>Minimum qualifications:</h5>
                        <ol class="job-qualification" style="text-align:left;">
                             <?php 
                                while($row = mysqli_fetch_assoc($jobminqua)){
                                    echo '<li class="quali">'.$row['MinQualification'].'</li>';
                                }

                            ?>
                        </ol>
                    </div>
                    <div>
                        <h5>Preffered Qualifications</h5>
                        <ol class="job-qualification" style="display:block important;text-align:left;">
                            <?php 
                                while($row = mysqli_fetch_assoc($jobprefqua)){
                                    echo '<li class="quali">'.$row['PreQualification'].'</li>';
                                }

                            ?>
                        </ol>
                    </div>
                    <div>
                        <h5>About the job</h5>
                        <p style="text-align:left; margin-left:20px;">
                        <?php echo $jobdesc['AboutJob']; ?>
                        </p>
                    </div>
                    <div class="btn">
                        <a href="login.php">
                            <button type="button" class="btn button-style" id="disable">Apply Now</button>
                        </a>
                    </div>
                    <div>
                        <p class="hove" onclick="window.location.href='register_app.php'">Register Now</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include("footer.php");
?>
<!-- <script>
function enable(){
    const d = new Date(); // 2024-10-27T23:00:00
    const d1 = new Date('2024-10-23T21:17:00');
    if(d === d1){
            document.getElementById("disable").style.display="block";
    }
    else{
        document.getElementById("disable").style.display="none";

    }
}

document.addEventListener("DOMContentLoaded", (event) => {
  console.log("DOM fully loaded and parsed");
});
    
</script> -->