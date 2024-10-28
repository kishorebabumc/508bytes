<?php
include('session.php');
$_SESSION['Page'] = 'contact';
include("header.php");
?>

<!-- inner banner -->
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-2">Contact Us</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.php">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
            </ul>
        </div>
    </section>
</div>
<!-- //inner banner -->

<!-- contact -->
<section class="w3l-contact py-1" id="contact">
    <div class="container py-lg-5 py-md-4 py-1">
        <div class="text-center mb-sm-5 mb-4">
            <label class="sub-title mb-2">Get In Touch</label>
            <h3 class="title-big">Contact Us</h3>
        </div>
        <div class="mx-auto pt-lg-4 pt-md-5 pt-4" style="max-width:1000px">
            <div class="row contact-block">
                <div class="col-md-5 contact-left">
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
                        <!-- <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-phone icon-color"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+91 9676767636">+91 9676767363</a></p>
                                </div>
                            </div> -->
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
                </div>
                <div class="col-md-7 contact-right mt-md-0 mt-4">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                        <div class="input-grids">
                            <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input" required="" />
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input" required="" />
                            <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input" required="" />
                            <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Website URL*" class="contact-input" required="" />
                        </div>
                        <div class="form-input">
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
                        </div>
                        <button class="btn button-style">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- map -->
<!-- <div class="map-iframe">
    <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Nandamuri%20Nagar,%20Vijayawada&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div> -->
<!-- //contact -->
<gmp-map center="16.5415199,80.6423475" zoom="16" map-id="DEMO_MAP_ID">
    <gmp-advanced-marker position="16.5415199,80.6423475" title="My location"></gmp-advanced-marker>
</gmp-map>
<!-- <a href="https://www.google.com/maps/search/?api=1&query=16.5415782,80.6423585">Open in Google Maps</a> -->



<?php
include("footer.php");
?>