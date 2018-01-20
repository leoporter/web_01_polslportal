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
    <title>PolslPortal</title>

		<!--slider-->
		<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
  
		<script type="text/javascript">
	
		var nr = Math.floor(Math.random()*3)+1;
		var timer1 = 0;
		var timer2 = 0;
		
		function setslide(nrslide)
		{
			clearTimeout(timer1)
			clearTimeout(timer2);
			nr = nrslide-1;
			
			hideslide();
			setTimeout("changeslide()", 300)
		}
		
		function hideslide()
		{
			$("#slider").fadeOut(300);
		}
	
		function changeslide()
		{
			nr++; if (nr>3) nr=1;
		
			var file = "<img src=\"slides/slide" + nr + ".jpg\" />";
			document.getElementById("slider").innerHTML = file;
			$("#slider").fadeIn(300);
			
			timer1 = setTimeout("changeslide()", 3000);
			timer2 = setTimeout("hideslide()", 2500);
		}
		
		</script>
		<!--slider end-->
			
</head>

<body onload="changeslide()">

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
		
    <!--slider-->
	<center>
	<span onclick="setslide(1)" style="cursor:pointer; color:#494D47"> &#x25cf </span>
	<span onclick="setslide(2)" style="cursor:pointer; color:#494D47"> &#x25cf </span>
	<span onclick="setslide(3)" style="cursor:pointer; color:#494D47"> &#x25cf </span>

	<div id="slider"></div>	
	</center>		  
	<!--slider end-->

        </div>
        <div id="footer">
            PolslPortal &copy; All rights reserved.
        </div>
    </div>
</body>