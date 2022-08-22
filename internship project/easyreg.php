<?php
  header('location=loginpage.php');
session_start();
$con = mysqli_connect("localhost","root","ELIblink67$$");
mysqli_select_db($con, 'easyjob');
    

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cnfrmpass = $_POST['cnfrmpassword'];

$s = "select * from user_info where email = '$email'";

$results = mysqli_query($con, $s);
$num = mysqli_num_rows($results);

if($num == 1){
    echo "user exists";
}
else{

    $reg = "insert into user_info(fname, lname, email, password, cnfrmpassword) values('$fname', '$lname', '$email', '$pass', '$cnfrmpass')";
    mysqli_query($con, $reg);
    echo "registered";
  }
?> 



