<?php
include('session.php');
$_SESSION['Page'] = 'career';
include("header.php");
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

                        <h4 style="float:left;">Trainee Developer</h4>
                        <p class="job-description" style="text-align:left; margin-left:20px; background-color:#EA6E23; color:whitesmoke;">Trainee Developer is not a full-time permanent opportunity, the training program is 12 months in duration.<strong>After 6 months the selected trainees paid monthly remuneration, thereafter 6 months and after completion of training the selected trainees are reviewed and taken as full time employee to the organization and fixed scales as per the norms.</strong> Recent graduates and also work experience in other industries may apply. Please complete your application before Oct 26, 2024, 11 PM IST.</p>
                    </div>
                    <div>
                        <h5>Minimum qualifications:</h5>
                        <ol class="job-qualification" style="text-align:left;">
                            <li class="quali"> Bachelor's degree or equivalent practical experience.</li>
                            <li class="quali">Ability to communicate in English fluently, to understand and execute instructions and learn via training documentations and presentations.</li>
                        </ol>
                    </div>
                    <div>
                        <h5>Preffered Qualifications</h5>
                        <ol class="job-qualification" style="display:block important;text-align:left;">
                            <li class="quali">
                                Technical graduates (B.Tech / BE) with programming skills are preferable.
                            </li>
                            <li class="quali">
                                Ability to work with ambiguous tasks, find suitable solutions, and seek help or advice where appropriate.
                            </li>
                            <li class="quali">Ability to work independently and within a team framework.</li>
                            <li class="quali">
                                Interest in building a career in Software Technology
                            </li>
                            <li class="quali">
                                Excellent problem solving and critical thinking skills.
                            </li>
                        </ol>
                    </div>
                    <div>
                        <h5>About the job</h5>
                        <p style="text-align:left; margin-left:20px;">
                            The Trainee Developer is a program of 12 months offering training and learning the individuals in interested technologies in Software Industry.
                            Selected Trainees are working in environment of live projects, and they have gain the knowledge as Full Stack Developer and end to end implementation of project and initial state to production stage.
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