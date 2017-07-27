<?php
	session_start();
	if($_SESSION["username"]){
		header("location: index.php");
	}
require "dbcon.php";
if($_POST['firstName']=="")
{
 echo "<script>alert('Enter First name');document.location='signup.php'</script>";
        
        exit();
    }
    if($_POST['lastName']=="")
{
 echo "<script>alert('Enter last name');document.location='signup.php'</script>";
        
        exit();
    }
    if($_POST['email']=="")
{
 echo "<script>alert('Enter email');document.location='signup.php'</script>";
        
        exit();
    }
    if($_POST['password']=="")
{
 echo "<script>alert('Enter password');document.location='signup.php'</script>";
        
        exit();
    }
if(isset($_POST['btnsubmit']))
{

	$fistName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="insert into meetutu_users(firstName,lastName,email,password) values('$fistName','$lastName','$email','$password')";
	$run=$con->query($query);
	$_SESSION["username"]=$_POST["firstName"];
	$_SESSION["firstName"]=$_POST["firstName"];
	$_SESSION["lastName"]=$_POST["lastName"];
	$_SESSION["email"]=$_POST["email"];
	if($run)
		echo "<script>alert('Successfuly Registered');document.location='editProfile.php'</script>";
	else
		echo "<script>alert('failed');document.location='signup.php'</script>";
}

?>
