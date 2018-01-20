<?php

	session_start();
	if ((isset($_SESSION['log_on'])) && ($_SESSION['log_on']==true))
	{
		header('Location: PolslPortal_afterlogin.php');
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="PolslPortal"/>
    <meta name="keywords" content="Politechnika Śląska"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran|Indie+Flower" rel="stylesheet"> 
    <title>Log In</title>

</head>

<body>
    <div id="container">
        <div id="nav">
            <div id="homepage">
                <a href="PolslPortal.php" class="link">Home</a>
            </div>
            <div id="register">
                <a href="register.php" class="link">Register</a>
            </div>
            <div id="login">
                <a href="login.php" class="link">Log In</a>
            </div>
            <div id="atp">
                <a href="atp.php" class="link">About</a>
            </div>
        </div>
        <div id="content">

		<form action="login_2.php" method="post">
	
		Login: <br /> <input type="text" name="username" /> <br />
		Password: <br /> <input type="password" name="password" /> <br /><br />
		<input type="submit" value="Login" />
		<br />
		<?php
		if(isset($_SESSION['error']))	echo $_SESSION['error'];
		?>
	
		</form>

        </div>
        <div id="footer">
            PolslPortal &copy; All rights reserved.
        </div>
    </div>
</body>
</html>