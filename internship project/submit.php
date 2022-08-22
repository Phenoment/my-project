<?php
session_start();
$con = mysqli_connect("localhost", "root", "ELIblink67$$");
mysqli_select_db($con, 'easyjob');

$title = $_POST["title"];
$location = $_POST["location"];
$status = $_POST["status"];
$contact = $_POST["contact"];
$description = $_POST["description"];

$submit = "insert into job_info(job_title, job_location, job_status, contact, job_description) values('$title', '$location', '$status', '$contact', '$description')";
mysqli_query($con, $submit);
echo "submitted";

?>