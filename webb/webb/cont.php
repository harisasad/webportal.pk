<?php

$id=0;
$update=false;
$fname = '';
$email = '';
$mobile = '';
$msg = '';

$servername = "localhost";
$username = "root";
$password = "";
$db = "webportal";
$mysqli = new mysqli($servername, $username, $password, $db);
if(!$mysqli)
{
	echo "Connection Lost";
	
}
if(isset($_POST['save'])){
	
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$msg=$_POST['msg'];
	
	
	$mysqli->query( "INSERT INTO contact (fname,email,mobile,msg) 
		VALUES ('$fname','$email','$mobile','$msg')") or die($mysqli->error);
	echo '<script>alert("Your Data has Successfully Submitted");</script>';
	header('location:contact.php');
	
	
}


