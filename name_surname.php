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
    <title>My profile</title>

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

		<h3>Profile modification and settings</h3>
		<?php
			echo "<p>Login: ".$_SESSION['username'].'</p>';
			echo "<p>Email: ".$_SESSION['email'].'</p>';
			
			/*Zmiana hasła*/
//			$liczba = .$_SESSION['id'].;
//			$_SESSION["id"]=''.$_SESSION['id'].'';
			$_SESSION["id"] = "1";		
//			$conn = mysql_connect("localhost","root","");
			require "connection.php";
//			mysql_select_db("phppot_examples",$conn);
			if(count($_POST)>0) {
			$result = mysql_query("SELECT *from users WHERE id='" . $_SESSION["id"] . "'");
			$row=mysql_fetch_array($result);
			if($_POST["currentPassword"] == $row["password"]) {
			mysql_query("UPDATE users set password='" . $_POST["newPassword"] . "' WHERE id='" . $_SESSION["id"] . "'");
			$message = "Password Changed";
			} else $message = "Current Password is not correct";
			}	
		?>
			<script>
		function validatePassword() {
		var currentPassword,newPassword,confirmPassword,output = true;

		currentPassword = document.frmChange.currentPassword;
		newPassword = document.frmChange.newPassword;
		confirmPassword = document.frmChange.confirmPassword;

		if(!currentPassword.value) {
			currentPassword.focus();
			document.getElementById("currentPassword").innerHTML = "required";
			output = false;
		}
				else if(!newPassword.value) {
			newPassword.focus();
			document.getElementById("newPassword").innerHTML = "required";
			output = false;
		
		else if(!confirmPassword.value) {
			confirmPassword.focus();
			document.getElementById("confirmPassword").innerHTML = "required";
			output = false;
		}
		if(newPassword.value != confirmPassword.value) {
			newPassword.value="";
			confirmPassword.value="";
			newPassword.focus();
			document.getElementById("confirmPassword").innerHTML = "not same";
			output = false;
		 	
		return output;
		}
		</script>		
		
		<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
		<div style="width:500px;">
		<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
		<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
		<tr class="tableheader">
		<td colspan="2"><h3>Change Password</h3></td>
		</tr>
		<tr>
		<td width="40%"><label>Current Password</label></td>
		<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
		</tr>
		<tr>
		<td><label>New Password</label></td>
		<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
		</tr>
		<td><label>Confirm Password</label></td>
		<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
		</tr>
		<tr>
		<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
		</tr>
		</table>
		</div>
		</form>	

        </div>
        <div id="footer">
            PolslPortal &copy; All rights reserved.
        </div>
    </div>
</body>