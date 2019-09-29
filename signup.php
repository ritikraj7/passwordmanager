<?php
	if(isset($_POST['submit']))
	{
		include 'include/database.php';
		$email=$_POST['email'];
		$lastname=$_POST['lastname'];
		$firstname=$_POST['firstname'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$confirmpassword=$_POST['password'];	
		if (empty($firstname) || empty($lastname) || empty($email) || empty($username) ||empty($password)||empty($confirmpassword))
		{
			 header("Location:./signuphtm.php?error=emptyfields&username=".$username."&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
			 exit();
		}
		else if(!preg_match("/^[a-zA-Z]*$/",$firstname)&&!preg_match("/^[a-zA-Z]*$/",$lastname)&&!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			header("Location:./signuphtm.php?error=invalidmailfirstlastname");
			exit();
		}
 		else if(!preg_match("/^[a-zA-Z]*$/",$firstname)&&!preg_match("/^[a-zA-Z]*$/",$lastname))
		{
				header("Location:./signuphtm.php?error=invalidfirstnamelastname");
				exit();
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			header("Location:./signuphtm.php?error=invalidmail");
				exit();
		}
		else if($password!==$confirmpassword)
		{
			header("Location:./signuphtm.php?error=passwordcheck&username=".$username."&email=".$email."&firstname=".$firstname."&lastname=".$lastname);	
			exit();
		}
		else
		{
			$sql = "SELECT * FROM passwords WHERE username=?";
			$stmt=mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql))
			{
				header("Location:./signuphtm.php?error=sqlerror1");
				exit();
			}
			else	
			{	
				mysqli_stmt_bind_param($stmt,"s",$username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);	
				$resultCheck=mysqli_stmt_num_rows($stmt);
				if($resultCheck>0)
				{
					header("Location:./signuphtm.php?error=usernametaken");
					exit();
				}
				else
				{
					$sql="INSERT INTO passwords (username,password,firstname,lastname,email) VALUES (?,?,?,?,?)";
					$stmt=mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$sql))
					{
						header("Location:./signuphtm.php?error=sqlerror");
						exit();
					}
					else
					{
						
						mysqli_stmt_bind_param($stmt,"sssss",$username,$password,$firstname,$lastname,$email);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_store_result($stmt);
						$sql="CREATE TABLE ".$username." (id int  PRIMARY KEY AUTO_INCREMENT, passwordof varchar(50) NOT NULL, password varchar(50) NOT NULL)";
				
						$result=$conn->query($sql);
						 header("Location:./loginhtm.php");
			 			
					}
				}
			}
		}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
	else
	{
		header("Location:./signuphtm.php?error=cantopen");
	    exit();
	}


?>

