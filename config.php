<?php
// ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include(__DIR__."/loadenv.php");

// Call the function to load the .env file
loadEnv(__DIR__ . '/.env');

$HOST = getenv('HOST');
$USER = getenv('USER');
$PASS = getenv('PASS');
$DB = getenv('DB');


$connection = mysqli_connect($HOST, $USER, $PASS);
$database = mysqli_select_db($connection,"$DB");

// $MailPass = getenv('MailPass');
// echo "MailPass";

// $domain = $_SERVER['HTTP_HOST'];
// if("aphousefed.in" == $domain){
//     $connection = mysqli_connect($HOST, $USER, $PASS);
//     $database = mysqli_select_db($connection,"$DB");
// }else{
//     $connection = mysqli_connect($HOST, $USER, $PASS);
//     $database = mysqli_select_db($connection,"$DB");
// }
?>
