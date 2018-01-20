<?php

	session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="PolslPortal"/>
    <meta name="keywords" content="Politechnika Śląska"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran|Indie+Flower" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <title>Notifications</title>
			
</head>

<body>
    <div id="container">
        <div id="nav">
            <div id="homepage_afterlogin">
                <a href="PolslPortal_afterlogin.php" class="link">Home</a>
            </div>
            <div id="add_proposal">
                <a href="add_proposal.php" class="link">Add proposal</a>
            </div>
            <div id="notifications">
                <a href="notifications.php" class="link">Notifications</a>
            </div>
            <div id="name_surname">
			<?php
				echo '<a href="name_surname.php" class="link">'.$_SESSION['username'].'</a><a href="logout.php">Log out</a>';
			?>
            </div>
        </div>
        <div id="content">
		
            <div>
                Who: <br/>
                <input type="text">
            </div>
            <div>
                Subject: <br/>
                <input type="text">
            </div>
            <div>
                Message: <br/>
                <input type="email">
            </div>
            
		
        </div>
        <div id="footer">
            PolslPortal &copy; All rights reserved.
        </div>
    </div>
</body>