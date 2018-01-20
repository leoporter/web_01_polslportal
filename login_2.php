<?php

	session_start();

	if ((!isset($_POST['username'])) || (!isset($_POST['password'])))
	{
		header('Location: index.php');
		exit();
	}
	
	require_once "connection.php";	
	
	$connection = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($connection->connect_errno!=0)
	{
		echo "Error: ".$connection->connect_errno;
	}
	else
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		
		if($result = @$connection->query($sql))
		{
			$how_many=$result->num_rows;
			if($how_many>0)
			{
                $_SESSION['log_on'] = true;
                $row = $result->fetch_assoc();
               // if(password_verify($password, $row['password']))
               // {
                    
                    $_SESSION['log_on'] = true;
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];

                    unset($_SESSION['error']);				
                    $result->free_result();
                    header('Location: PolslPortal_afterlogin.php');
                /*
                }
                else
                {
                    $_SESSION['error'] = '<span style="color:#c83349">Invalid login or password!</span>';
				    header('Location: login.php');
                }
                */
			}
            
            else{
				
				$_SESSION['error'] = '<span style="color:#c83349">Invalid login or password!</span>';
				header('Location: login.php');
				
			}
		}
		
		$connection->close();
		
	}

	
?>