<?php
// include('session.php');
// $_SESSION['Page'] = 'contact';
include("header.php");
?>

<!-- inner banner -->
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-2">Register Form</h4>
            <!-- <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
            </ul> -->
        </div>
    </section>
</div>
<!-- //inner banner -->

<!-- contact -->
<section class="w3l-contact py-5" id="contact">
    <!-- <div class="container py-lg-5 py-md-4 py-2"> -->
        <div class="mx-auto pt-lg-4 pt-md-5 pt-4" style="max-width:1000px">
            <div class="row contact-block">
                <!-- <div class="col-md-5 contact-left">
                    <h3 class="font-weight-bold mb-md-5 mb-4">Contact Details</h3>
                    <div class="cont-details">
                        <div class="d-flex contact-grid">
                            <div class="cont-left text-center mr-3">
                                <span class="fa fa-globe icon-color"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Company Address</h6>
                                <p>D.No.43-128/9, KL Rao Road,Singh Nagar, Vijayawada, Andhra Pradesh - 520015, India</p>
                            </div>
                        </div>
                        
                        <div class="d-flex contact-grid mt-4 pt-lg-2">
                            <div class="cont-left text-center mr-3">
                                <span class="fa fa-envelope-open icon-color"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Email Us</h6>
                                <p><a href="mailto:info@508bytes.com" class="mail">info@508bytes.com</a></p>
                            </div>
                        </div>

                    </div>
                </div> -->
                <div class="col-md-7 mt-md-0 mt-4">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                        <div class="input-grids">
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Email" class="contact-input" required="" />
                            <input type="text" name="w3lName" id="w3lName" placeholder="First Name" class="contact-input" required="" />
                            <input type="text" name="w3lName" id="w3lName" placeholder="Last Name" class="contact-input" required="" />

                            <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Mobile Number" class="contact-input" required="" />
                            <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Password" class="contact-input" required="" />
                        </div>
                        <button class="btn button-style" >Register</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- </div> -->
</section>
<!-- map -->
<!-- <div class="map-iframe">
    <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Nandamuri%20Nagar,%20Vijayawada&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div> -->
<!-- //contact -->
<!-- <gmp-map center="16.5415199,80.6423475" zoom="16" map-id="DEMO_MAP_ID">
      <gmp-advanced-marker position="16.5415199,80.6423475" title="My location"></gmp-advanced-marker>
    </gmp-map> -->


<?php
include("footer.php");
?>