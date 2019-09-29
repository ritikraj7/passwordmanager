<?php
if(isset($_POST['submit']))
{
	session_start();
	include 'include/database.php';
	$passwordof=$_POST['passwordof'];
	$password=$_POST['password'];

	if (empty($password) || empty($passwordof))
	{
		 header("Location:./addpass.php?error=emptyfiels");
			 exit();
	}
	else
	{
					$sql="INSERT INTO ".$_SESSION['username']." (passwordof,password) VALUES ('$passwordof','$password')";
					if(mysqli_query($conn,$sql))
					{
						header("Location:./loginafter.php");
					}
					else
					{
						header("Location:./addpass.php?error=cantconnect");
					}
					
	}
}
else
{
	header("Location:./addpass.php?error=cantconnect2");
}
?>