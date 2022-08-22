<?php
session_start();

$con = mysqli_connect("localhost","root","ELIblink67$$");
mysqli_select_db($con, 'easyjob');
    

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cnfrmpass = $_POST['cnfrmpassword'];

$s = "select * from user_info where email = '$email' && password ='$pass'";

$results = mysqli_query($con, $s);
$num = mysqli_num_rows($results);

if($num == 1){
   header('location:homepage.html');
}
else{
   header('location:loginpage.php');
  }
?> 