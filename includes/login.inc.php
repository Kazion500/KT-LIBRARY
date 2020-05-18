<?php

if (isset($_POST['login-submit'])) 
{

	include 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['password'];


	// Validation codeline

	if (empty($mailuid) || empty($password) ) 
	{
		header("Location:../login.php?error=Emptyfields&mailuid ");
	    exit();
	}

	// End of Validation codeline


	else 
	{
		$sql = "SELECT * FROM registration WHERE username = ? OR email = ?";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt,$sql)) 
		{
			header("Location:../login.php?error= ". mysqli_error());
	        exit();
		}
		else 
		{
			mysqli_stmt_bind_param($stmt,"ss",$mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result= mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) 
			{
				$passCheck = password_verify($password,$row['password'] );

				if ($passCheck == FALSE) 
				{
					header("location: ../index.php?error=wrongPassword");
		            exit();
				}
				elseif ($passCheck == TRUE) 
				{
					session_start();
					$_SESSION['username'] =  $row['username'];
					$_SESSION['email'] =  $row['email'];

					header("location: ../index.php?login=Success");
		            exit();
				}
				else 
				{
					header("location: ../index.php?error=wrongPassword");
		            exit();
				}
			}
			
		}
	}


mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else
{
	header("Location:../index.php");
	exit();
}


