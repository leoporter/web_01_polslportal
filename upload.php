<?php
	session_start();
	
	require_once"connection.php";
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if($polaczenie->connect_errno!=0)
	{
		echo "Error:".$polaczenie->connect_errno;
	}
	else
	{
        
		$x = $_POST['x'];
        $type = $_POST['type'];
        $name = $_POST['name'];
        $author = $_POST['author'];
        $issue = $_POST['issue'];
        $book_condition = $_POST['book_condition'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        
        
		$sql='INSERT INTO items (item type, item name, author, age, state, details) VALUES ("$type", "$name", "$author", "$issue", "$book_condition", "$description")';
		
		if($polaczenie->query($sql))
		{
			echo "Record updated successfully";
			header('Location: PolslPortal_afterlogin.php');
		}
		else
		{
			echo "Error updating record: ". $polaczenie->error;
		}
		
	}
    
		$polaczenie->close();
	
?>