<?php
	session_start();
	if(!$_SESSION["username"]){
		header("location: index.php");
	}
require "dbcon.php";
    if($_POST['lang']=="")
{
 echo "<script>alert('Enter subjects');document.location='editprofile.php'</script>";
        
        exit();
    }
    if($_POST['addr']=="")
{
 echo "<script>alert('Enter address');document.location='editprofile.php'</script>";
        
        exit();
    }
if(isset($_POST['btnsubmit']))
{
	// $fistName=$_SESSION["firstName"];
	$lastName=$_POST['lastName'];
	$dign=$_POST['dign'];
	$lang=$_POST['lang'];
	$addr=$_POST['addr'];
	$about="hiiii";
	$email=$_SESSION["email"];
	echo "$lastName"," ","$dign"," ","$lang"," ","$addr"," ","$about";
	$query="UPDATE meetutu_users SET lastName='$lastName', designation='$dign',languages='$lang',address='$addr',about='$about' WHERE email='$email' ";
	// $query="insert into meetutu_users(lastName,designation,languages,address,about) values('$lastName','$dign','$lang','addr','$about') where email=$email";
	$run=$con->query($query);
	

		echo "<script>alert('Data have be =en save succssfully');document.location='profilemap.php'</script>";
}
?>
