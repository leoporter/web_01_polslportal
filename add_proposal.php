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
    <title>Add proposal</title>
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
				echo '<a href="name_surname.php" class="link">'.$_SESSION['username'].'</a> <a href="logout.php">Log out</a>';
			?>
            </div>
        </div>
        <div id="content">
            
	<h3>Add proposal</h3>
	<form action="add_proposal_2.php" method="post"> 
		<table border="0" cellpadding="10" cellspacing="0">
		<tr>
		<td>Type</td>
		<td><input type="text" name="type" /></td>
		</tr>
		<tr>
		<td>Name</td>
		<td><input type="text" name="name" /></td>
		</tr>
		<tr>
		<td>Author</td>
		<td><input type="text" name="author" /></td>
		</tr>
		<tr>
		<td>Issue/year</td>
		<td><input type="text" name="issue" /></td>
		</tr>
		<tr>
		<td>Condition</td>
		<td><input type="text" name="book_condition" /></td>
		</tr>
		<tr>
		<td>Description</td>
		<td><input type="text" name="description" /></td>
		</tr>
		<tr>
		<td>Price</td> 
		<td><input type="text" name="price" /></td>
		</tr>
		</table>	
		<br />		
		<input type="submit" value="Submit"/>
	</form>

	 </div>
        <div id="footer">
            PolslPortal &copy; All rights reserved.
        </div>
  </div>
</body>