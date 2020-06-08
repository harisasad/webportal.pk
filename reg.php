<?php

$id=0;
$update=false;
$fname = '';
$lname = '';
$email = '';
$mobile = '';
$pass = '';

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
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$pass=$_POST['pass'];
	
	
	$mysqli->query( "INSERT INTO user (fname,lname,email,mobile,pass) 
		VALUES ('$fname','$lname','$email','$mobile','$pass')") or die($mysqli->error);
	echo '<script>alert("Your Account has Successfully Registered ");</script>';
	header('location:index.php');
	
	
}


if(isset($_GET['delete'])){
	
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM user WHERE ID=$id") or die ($mysqli->error());
	
	
	
}


if(isset($_GET['edit'])){
	
	$id=$_GET['edit'];
	$update=true;
			$result = $mysqli->query("SELECT * FROM user WHERE ID=$id") or die ($mysqli->error());
			while($row = $result->fetch_array()){
				$name=$row['fname'];
				$phone=$row['lname'];
				$email=$row['email'];
				$subject=$row['mobile'];
				$msg=$row['pass'];
												}
						}

if(isset($_POST['update'])){
	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$pass=$_POST['pass'];

	$mysqli->query("UPDATE user SET fname='$fname' , lname='$lname' , email='$email' , mobile='$mobile' , pass='$pass'    WHERE ID=$id") or die ($mysqli->error());

	header('location:index.php');
		}
?>