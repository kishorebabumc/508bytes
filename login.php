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
                <li><a href="index" .php>Home</a></li>
                <li class=" active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Career</li>
            </ul>
        </div>
    </section>
</div>
<style>
    .set {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-top: 50px;
        padding-bottom: 100px;
    }

    .all-content {
        border: 1px solid #EA6E23;
        border-radius: 10px;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .user-input {
        padding: 10px;
    }

    .login {
        display: flex;
        justify-content: center;
        padding-top: 30px;
        outline: none;
    }

    .mail-input input {
        width: 300px;
        border-radius: 10px;
        padding: 5px;
        outline: none;
    }

    .pass-input input {
        width: 300px;
        border-radius: 10px;
        padding: 5px;
        outline: none;
    }

    .password-input {
        padding-top: 10px;
        padding-left: 10px;
    }

    .rem-forgott {
        display: flex;
        justify-content: space-between;
        font-size: 12px;
       
    }
</style>
<div class="set">
    <div class="all-content">
        <form>
            <div class="user-input">
                <div class="user">
                    <label style="color:#EA6E23">UserName<label>
                </div>
                <div class="mail-input">
                    <input type="email" name="email">
                </div>
            </div>
            <div class="password-input">
                <div class="password">
                    <label class="pass" style="color:#EA6E23">Password</label>
                </div>

                <div class="pass-input">
                    <input type="text" name="password" id="pass">
                </div>
            </div>
            <div class="rem-forgott">
                <div>               
                    <input type="checkbox" style="display: block;"/>
                    <span>Remember Me</span>
                </div>
                <div>
                    <a href="#"><span>Forgott Password?</span></a>
                </div>
            </div>
            <div class="login"><button type="button" class="btn button-style">Login</button></div>
        </form>
    </div>
</div>
<?php
//include("footer.php");
?>