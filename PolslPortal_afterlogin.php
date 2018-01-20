<?php

	session_start();
	
	if (!isset($_SESSION['log_on']))
	{
		header('Location: index.php');
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
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran|Indie+Flower" rel="stylesheet"> 
    <title> You are logged in as...</title>

			
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
		
		<?php
			echo"<div>";
				echo "<p>Hello, ".$_SESSION['username'].'!</p>';
				echo "Here you can see all proposals that were submitted by members of PolslPortal Community. Submit your first one! ";
            echo"</div>";
/*
   połączenie z bazą sobie darujemy
   opisane jest ono w tej poradzie
   http://www.kess.com.pl/?sid=10&pid=32
*/
	require "connection.php";
    
/* zapytanie do konkretnej tabeli */
		$wynik = mysql_query("SELECT * FROM items") or die('Error');

/*
wyświetlamy wyniki, sprawdzamy,
czy zapytanie zwróciło wartość większą od 0
*/
if(mysql_num_rows($wynik) > 0) {
    /* jeżeli wynik jest pozytywny, to wyświetlamy dane */
    echo "<div id='record'>";
	    echo "<div id='type'><b>Type</b></div>";
 	    echo "<div id='name'><b>Name</b></div>";
	    echo "<div id='author'><b>Author</b></div>";
	    echo "<div id='issue'><b>Issue</b></div>";
		echo "<div id='condition'><b>Condition</b></div>";
	    echo "<div id='description'><b>Description</b></div>";
	    echo "<div id='price'><b>Price</b></div>";
	echo "</div>";
    while($r = mysql_fetch_assoc($wynik)) {
	echo "<div id='record2'>";
        echo "<div id='type'>".$r['item_type']."</div>";
        echo "<div id='name'>".$r['item_name']."</div>>";
        echo "<div id='author'>".$r['author']."</div>";
		echo "<div id='issue'>".$r['age']."</div>";
        echo "<div id='condition'>".$r['state']."</div>";
		echo "<div id='description'>".$r['details']."</div>";
        echo "<div id='price'>".$r['price']."</div>";
    echo "</div>";
    }

}

		?>
		
        </div>
        <div id="footer">
            PolslPortal &copy; All rights reserved.
        </div>
    </div>
</body>