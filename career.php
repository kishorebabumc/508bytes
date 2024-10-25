<?php
include('session.php');
$_SESSION['Page'] = 'career';
include("config.php");
include("header.php");
$job = mysqli_query($connection,"SELECT * FROM `jobs` WHERE Status = 1 ");
$count = mysqli_num_rows($job);
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
        <?php
        if(!isset($_SESSION['FirstName'])){
        ?>
        <div class="btn">
            <a href="register_app.php">
                <button type="button" class="btn button-style" id="disable">Register Now</button>
            </a>
        </div>
        <?php
        }
        ?>
    </section>
</div>
<!-- //inner banner -->
<!-- bottom-grids-->
<section class="w3l-bottom-grids-6 py-1">
    <div class="container py-lg-5 py-md-4">
        <div class="text-center mb-sm-5 mb-4">
            <!-- <label class="sub-title mb-2">Career</label> -->
            <h5>Position Overview: We’re seeking a motivated Software Developer to join our team. In this role,
                you’ll collaborate with designers and product managers to build and enhance our software products.
                You will have the opportunity to work with cutting-edge technologies and contribute to all phases of
                the software development lifecycle.</h5>
        </div>
        <div class="grids-area-hny main-cont-wthree-fea row">
            <?php
                if($count > 0){
                    while($row = mysqli_fetch_assoc($job)){
                        echo '<div class="col-lg-4 col-md-6 grids-feature">
                                <div class="area-box">
                                    <!-- <span class="fab fa-aws "></span> -->
                                    <i class="fa-solid fa-code icon-color" style="font-size: 2rem;"></i>
                                    <h4><a href="#feature" class="title-head">'.$row['Description'].'</a></h4>
                                    <p class="mb-4">Qualification : '.$row['Qualification'].'
                                    <p>
                                    <p class="mb-4">Skill : '.$row['Skill'].'
                                    <p>
                                    <p class="mb-4">Location : '.$row['Location'].'
                                    <p>
                                        <a href="view_details.php?jobid='.$row['JobID'].'"><button  class="btn button-style">View Details</button></a>
                                </div>                
                            </div>';
                    }
                } 
            
            ?>            
        </div>
    </div>
    </div>
</section>
<!-- //bottom-grids-->

<!-- contact -->
<!-- map -->
<!-- <div class="map-iframe">
    <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Nandamuri%20Nagar,%20Vijayawada&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

</div> -->
<!-- //contact -->


<?php
include("footer.php");
?>