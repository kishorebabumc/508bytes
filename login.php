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
        /* background-color: red; */
        padding-top: 100px;
        padding-bottom: 100px;
        border: 1px solid black;
    }

    .all-content {
        border: 1px solid black;
        padding: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .user-input {
        padding: 10px;
    }

    .password {
        padding-top: 10px;
    }
    .login{
        padding-top: 20px;
    }
    .mail-input input{
        width:300px;
        border-radius: 10px;
        padding:5px;
        background-color: red;
        outline: none;
    }
    .pass-input input{
        width:300px;
        border-radius: 10px;
        padding:5px;
        background-color: red;
        outline: none;

    }
</style>
<div class="set">
    <div class="all-content">
        <div class="user-input">
            <div class="user">
                <label>UserName<label>
            </div>
            <div class="mail-input">
                <input type="mail">
            </div>
        </div>
        <div>
            <div class="password"><label class="pass">Password</label></div>

            <div class="pass-input"><input type="text"></div>
        </div>
        <div class="login"><button type="button" class="btn button-style">Login</button></div>
    </div>
</div>
<?php
//include("footer.php");
?>