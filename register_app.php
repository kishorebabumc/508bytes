<?php

$_SESSION['Page'] = 'career';
include("header.php");
?>

<style>
    #snackbar {
        visibility: visible;
        min-width: 250px;
        margin-left: -125px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        bottom: 30px;
        font-size: 17px;
    }

    #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
        from {
            bottom: 0;
            opacity: 0;
        }

        to {
            bottom: 30px;
            opacity: 1;
        }
    }

    @keyframes fadein {
        from {
            bottom: 0;
            opacity: 0;
        }

        to {
            bottom: 30px;
            opacity: 1;
        }
    }

    @-webkit-keyframes fadeout {
        from {
            bottom: 30px;
            opacity: 1;
        }

        to {
            bottom: 0;
            opacity: 0;
        }
    }

    @keyframes fadeout {
        from {
            bottom: 30px;
            opacity: 1;
        }

        to {
            bottom: 0;
            opacity: 0;
        }
    }
</style>

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
    </section>
</div>
<!-- //inner banner -->

<!-- contact -->
<section class="w3l-contact py-1" id="contact">
    <div class="container py-lg-1 py-md-1 py-1">
        <div class="text-center mb-sm-2 mb-2">
            <h3 class="title-big">Registration</h3>
        </div>
        <div class="mx-auto pt-lg-4 pt-md-5 pt-4" style="max-width:1000px">
            <div class="row contact-block">

                <div class="col-md-9 mt-md-0 mt-4">
                    <form method="POST" id="reg-form" action="register_app_succ.php">
                        <div class="form-group row">
                            <label for="inputFirstName" class="col-sm-4 col-form-label">First Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="firstName" class="form-control" id="inputFirstName" placeholder="First Name" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLastName" class="col-sm-4 col-form-label">Last Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="lastname" class="form-control" id="inputLastName" placeholder="Last Name"  autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="MobileNo" class="col-sm-4 col-form-label">Mobile No.</label>
                            <div class="col-sm-6">
                                <input type="tel" name="mobileNo" minlength="10" maxlength="10" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" id="MobileNo" placeholder="Mobile Number"  autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputeMail" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-6">
                                <input type="email" name="email" class="form-control" id="inputeMail" placeholder="e-Mail"  autocomplete="off" required>
                            </div>
                            <div class="col-sm-2" id="VerifyDiv">
                                <button onclick="Verify()" class="btn btn-success">Verify</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-6">
                                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password"  autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <p class="text-danger" id="ErrorMessage"></p>
                            </div>
                        </div>
                        <div style="float:left;">
                            <button id="submit_btn" type="submit" class="btn button-style" onclick="">Register</button>
                            <div id="snackbar1">Already Registered, <a href='login.php'>click here</a> to login</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    

    $("#VerifyDiv").hide();    

    function Verify(){
        var email = $("#inputeMail").val();
        window.location.href=`verify_otp.php?email=${email}`;
    }
    $("#inputeMail").keyup(function(){
        var mail = $("#inputeMail").val();     
        $("#ErrorMessage").text("");   
        $("#submit_btn").prop('disabled', false);
        $.ajax({
                url : "register_email_ajax.php",
                type : "POST",
                data : {mail},
                success: function(res) {
                    var data = res.split("*")
                    if(data[0] == 1){
                        if(data[1] == 0){
                            $("#VerifyDiv").show(); 
                            $("#ErrorMessage").text("Verification Pending");
                            $("#submit_btn").prop('disabled', true);
                        }
                        else{
                            $("#VerifyDiv").hide(); 
                            $("#ErrorMessage").text("Already Registered, Please login using Mail ID")
                            $("#submit_btn").prop('disabled', true);
                        }
                    }else{
                        $("#VerifyDiv").hide(); 
                    }
                    console.log(data[0]);
                }
            });
        
    });

</script>



<?php
include("footer.php");
?>