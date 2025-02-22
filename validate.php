<?php 

if (!isset($_SESSION['Email'])) {
    header("location: login.php");
}