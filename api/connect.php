<?php 
$con = mysqli_connect('localhost','root','', 'snapkar');
if(!$con){
	die("Database Connection Failed". mysqli_error($con));
}
$select_db = mysqli_select_db($con, 'snapkar');
if(!$select_db){
	die("Database Selection Failed".mysqli_error($con));
}

$baseurl = 'http://localhost/snapkar/';

date_default_timezone_set("Asia/Kolkata");
?>