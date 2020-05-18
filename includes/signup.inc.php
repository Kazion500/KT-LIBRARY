<?php

if (isset($_POST['signup-submit'])) 
{
	include 'dbh.inc.php';

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$state = mysqli_real_escape_string($conn, $_POST['state']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);


						// Validations


	if (empty($firstname) || empty($lastname) || empty($email) || empty($phoneNumber) ||empty($password) ||empty($confirm_password) || empty($state) || empty($city)) 
	{
		header("Location:../signup.php?error=emptyfields&firstname=".$firstname.
			"&lastname=".$lastname."&email=".$email."&phone_number=".$phoneNumber."&state=".$state. "&city=".$city);
		exit();
	}
	elseif (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/",
		$firstname) && !preg_match("/^[a-zA-Z]*$/",
		$lastname) && !preg_match("/^[a-zA-Z0-9]*$/",
		$username)) 
	{
		header("Location:../signup.php?error=Invalidemailuid&phone_number=".$phoneNumber."&state=".$state. "&city=".$city);
		exit();
	}

	elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) 
	{
		header("Location:../signup.php?error=Invalidemail&firstname=".$firstname.
			"&lastname=".$lastname."&phone_number=".$phoneNumber."&state=".$state. "&city=".$city);
		exit();
	}
	elseif (!preg_match("/^[a-zA-Z]*$/", $username)) 
	{
		header("Location:../signup.php?error=InvalideUsername=firstname=".$firstname."&lastname=".$lastname."&email=".$email."&phone_number=".$phoneNumber."&state=".$state. "&city=".$city);
		exit();
	}
	elseif (!preg_match("/^[a-zA-Z]*$/", $firstname)) 
	{
		header("Location:../signup.php?error=Invalidefirstname&lastname=".$lastname."&email=".$email."&phone_number=".$phoneNumber."&state=".$state. "&city=".$city);
		exit();
	}
	elseif (!preg_match("/^[a-zA-Z]*$/", $lastname)) 
	{
		header("Location:../signup.php?error=Invalidelastname&firstname=".$firstname."&email=".$email."&phone_number=".$phoneNumber."&state=".$state. "&city=".$city);
		exit();
	}
	elseif (strlen($password) < 8) 
	{
		header("Location:../signup.php?error=password_too_short&firstname=".$firstname.
			"&lastname=".$lastname."&email=".$email."&phone_number=".$phoneNumber."&state=".$state. "&city=".$city);
		exit();
	}
	elseif (strlen($confirm_password) < 8 ) {
		header("Location:../signup.php?error=password_too_short&firstname=".$firstname.
			"&lastname=".$lastname."&email=".$email."&phone_number=".$phoneNumber."&state=".$state. "&city=".$city);
		// exit();
	}

	elseif ($password !== $confirm_password) 
	{
		header("Location:../signup.php?error=password_does_not_match&firstname=".$firstname.
			"&lastname=".$lastname."&email=".$email."&phone_number=".$phoneNumber."&state=".$state. "&city=".$city);
		exit();
	}
							// End of validations


	else 
	{

		    $sql = "SELECT username FROM registration WHERE username = ?";
		    $stmt = mysqli_stmt_init($conn);

			if (!mysqli_stmt_prepare($stmt, $sql)) 
			{
				echo "error_sql_connect";
			}
			else
			{
				mysqli_stmt_bind_param($stmt,"s",$username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if ($resultCheck > 0 ) 
				{
					header("Location:../signup.php?error=Username_taken&firstname=".$firstname.
			 			"&lastname=".$lastname."&email=".$email."&phone_number=".
			 			$phoneNumber."&state=".$state. "&city=".$city);
					exit();
				}
				else 
				{
					$sql = "INSERT INTO registration (firstname,lastname,email,username,password,state,city,phoneNumber) VALUES (?,?,?,?,?,?,?,?);";

					$stmt = mysqli_stmt_init($conn);

					if (!mysqli_stmt_prepare($stmt, $sql)) 
						{
							echo "error_sql_connect";
						}
						else
						{   

						    $passhash = password_hash($password, PASSWORD_DEFAULT);
							mysqli_stmt_bind_param($stmt,"ssssssss",$firstname,
								$lastname,$email,$username,$passhash,$state,$city,$phoneNumber);
							mysqli_stmt_execute($stmt);
							
							header("Location:../signup.php?Signup=Success");
							 
						}

				}
			}


    }


mysqli_stmt_close($conn);
mysqli_close($conn);
}
else
{
	header("Location:../index.php");
	exit();
}


