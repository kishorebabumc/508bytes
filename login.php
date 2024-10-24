<?php
include('session.php');
$_SESSION['Page'] = 'login';
include("header.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($connection, "SELECT * FROM `applicants` WHERE BINARY email = '$email' AND BINARY password = '$password' AND verified = 1");
    if(mysqli_num_rows($query) > 0){
        $data = mysqli_fetch_assoc($query);
        $_SESSION['FirmName'] = $data['firstName'];
        $_SESSION['LastName'] = $data['lastName'];
        echo $_SESSION['FirmName'];
    }else{
        echo "User Name or Password is incorrect";
    }
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
        background-color: #EA6E23;
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
        padding: 4px;
        outline: none;
        border: 1px solid #EA6E23;
    }

    .pass-input input {
        width: 300px;
        border-radius: 10px;
        padding: 4px;
        outline: none;
        border: 1px solid #EA6E23;
    }

    .password-input {
        padding-top: 10px;
        padding-left: 10px;
    }

    /* .rem-forgott {
        display: flex;
        justify-content: space-between;
        font-size: 12px;

    } */
</style>
<div class="set">
    <div class="all-content">
        <form action="#" method="post">
            <div class="user-input">
                <div class="user">
                    <label style="color:white">UserName<label>
                </div>
                <div class="mail-input">
                    <input type="email" name="email" autocomplete="off">
                </div>
            </div>
            <div class="password-input">
                <div class="password">
                    <label class="pass" style="color:white">Password</label>
                </div>

                <div class="pass-input">
                    <input type="password" name="password" id="pass" autocomplete="off">
                </div>
            </div>
            <!-- <div class="rem-forgott">
                <div style="color:#EA6E23">               
                    <input type="checkbox" style="display: block;"/>
                    <span>Remember Me</span>
                </div>
                <div>
                    <a href="#"><span style="color:#EA6E23">Forgott Password?</span></a>
                </div>
            </div> -->
            <div class="login"><button type="submit" class="btn button-style">Login</button></div>
        </form>
    </div>
</div>