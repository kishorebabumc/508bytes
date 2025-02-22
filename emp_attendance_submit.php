<?php
include("config.php");

$date = $_POST['date'];
$time = $_POST['time'];
$emp_id = $_POST['emp_id'];

$select = "SELECT * FROM emp_attendance WHERE emp_id = '$emp_id' AND date = CURDATE() ";
$res = mysqli_query($connection, $select);
$numrows = mysqli_num_rows($res);
if ($numrows > 0) {
    $out_time = "UPDATE  emp_attendance SET out_time ='$time' WHERE emp_id ='$emp_id' AND date = CURDATE()";
    $res = mysqli_query($connection, $out_time);
} else {
    $query = "INSERT INTO  emp_attendance ( date,in_time,emp_id ) VALUES ('$date', '$time', '$emp_id')";
    $res = mysqli_query($connection, $query);<?php
include("config.php");

$date = $_POST['date'];
$time = $_POST['time'];
$emp_id = $_POST['emp_id'];

$select = "SELECT * FROM emp_attendance WHERE emp_id = '$emp_id' AND date = CURDATE() ";
$res = mysqli_query($connection, $select);
$numrows = mysqli_num_rows($res);
if ($numrows > 0) {
    $out_time = "UPDATE  emp_attendance SET out_time ='$time' WHERE emp_id ='$emp_id' AND date = CURDATE()";
    $res = mysqli_query($connection, $out_time);
} else {
    $query = "INSERT INTO  emp_attendance ( date,in_time,emp_id ) VALUES ('$date', '$time', '$emp_id')";
    $res = mysqli_query($connection, $query);
}


}

<?php
include("config.php");

$date = $_POST['date'];
$time = $_POST['time'];
$emp_id = $_POST['emp_id'];

$select = "SELECT * FROM emp_attendance WHERE emp_id = '$emp_id' AND date = CURDATE() ";
$res = mysqli_query($connection, $select);
$numrows = mysqli_num_rows($res);
if ($numrows > 0) {
    $out_time = "UPDATE  emp_attendance SET out_time ='$time' WHERE emp_id ='$emp_id' AND date = CURDATE()";
    $res = mysqli_query($connection, $out_time);
} else {
    $query = "INSERT INTO  emp_attendance ( date,in_time,emp_id ) VALUES ('$date', '$time', '$emp_id')";
    $res = mysqli_query($connection, $query);
}

