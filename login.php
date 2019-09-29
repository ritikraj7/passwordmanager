<?php 
if(isset($_POST['submit']))
{
	require 'include/database.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(empty($username) || empty($password))
	{
		header("Location:./loginhtm.php?login=error1");
		exit();
	}
	else
	{
		$sql="SELECT * FROM passwords WHERE username=?;";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("Location:./loginhtm.php?error=sqlerror");
			exit();
		}
		else
		{
			mysqli_stmt_bind_param($stmt,"s",$username);
			mysqli_stmt_execute($stmt);
			$result=mysqli_stmt_get_result($stmt);
			if($row=mysqli_fetch_assoc($result))
			{
				
				if($password!==$row['password'])
				{
					header("Location:./loginhtm.php?error=wrongpwd");
					exit();
				}
				else if ($password===$row['password'])
				{
					session_start();
					$_SESSION['username']=$row['username'];
					$_SESSION['email']=$row['email'];
					$_SESSION['firstname']=$row['firstname'];
					$_SESSION['lastname']=$row['lastname'];
					header("Location:./loginafter.php");
					exit();
				}
				else
				{
					echo "y";
				}
			}
		}
	}
	mysqli_close($conn);
}
else
{
	header("Location:./loginhtm.php?login=error");
	exit();
}
?>