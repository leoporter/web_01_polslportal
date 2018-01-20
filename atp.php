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
    <title>About</title>

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
            
            Hello, we are students from Silesian University of Technology. We are studying at Faculty of Automatic Control, Computer Science and Electronics. We would like to present our work project. We have created an alternative for existing portals which deal with selling or exchanging things. However the main thing that distiguishes us from anyone else is that this website was created only for you, students of Silesian University of Technology in Gliwice.
            <br/>
            <br/>
            Here you can easily find the things that someone wants to sell because they don't need it anymore. But maybe you need it? Find out by logging in on our website. It's totally for free!
            <br/>
            <br/>
            The idea of this project was born in October when we had to come up with something that will be useful and bring us fun with proccess of creation. This is how "PolslPortal" was born in our heads. After two months we are proud to say that "the job is done" :) 
            <br/>
            <br/>
            We hope that this website will make your life easier!
            <br/>
            <br/>
            Authors:
            <br/>
            <br/>
            Dominik Trygar & Robert Holajn

        </div>
        <div id="footer">
            PolslPortal &copy; All rights reserved.
        </div>
    </div>
</body>