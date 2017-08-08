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
	$query="select firstName,password from meetutu_users where email='$Username' and password='$Password'";
	$run=$con->query($query) or  die(mysqli_error($mysqli));
	
if(mysqli_num_rows($run)==1)
{
        $value = mysqli_fetch_row($run);
	$_SESSION["username"]=$value[0];
	echo "<script>document.location='profilemap.php'</script>";
}
else
	echo "<script>alert('Invalid Credentials');document.location='login1.php'</script>";

}
?>
