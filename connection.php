<?php
  
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "polslportal";
	
// nawiazujemy polaczenie
$connection = @mysql_connect($host, $db_user, $db_password, $db_name)
// w przypadku niepowodznie wyświetlamy komunikat
or die('Cannot connect with MySQL server.<br />Error: '.mysql_error());
// połączenie nawiązane ;-)
//echo "Connection with server succeded!<br />";
// nawiązujemy połączenie z bazą danych
$db = @mysql_select_db($db_name, $connection)
// w przypadku niepowodzenia wyświetlamy komunikat
or die('Cannot connect with database<br />Error: '.mysql_error());
// połączenie nawiązane ;-)
//echo "Connection with database succeded!<br />";
        
?>