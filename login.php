<?php
	session_start();
if($_SESSION["username"]){
header("location: profilemap.php");
}
require "dbcon.php";
if(isset($_POST['btnsubmit']))
{
	
	$Username =$_POST['email'];
	$Password=$_POST['password'];
	echo "$Username","","$Password";
	$query="select firstName,password from meetutu_users where email='$Username' and password='$Password'";
	$run=$con->query($query) or  die(mysqli_error($mysqli));
	
if($run)
{
	$_SESSION["username"]=$_POST["firstName"];
	echo "<script>alert('Succssfully loged in');document.location='profilemap.php'</script>";
}
else
	echo "<script>alert('Invalid Credentials');document.location='index.php'</script>";

}
?>
