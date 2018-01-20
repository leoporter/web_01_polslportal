<?php
    // łączymy się z bazą danych
    $connection = mysqli_connect("localhost", "root", "", "polslportal")
    or die('No connection with server');
    $db = @mysql_select_db('polslportal', $connection)
    or die('No connection with database');
    
    $x = $_POST['x'];
    
    // dodajemy rekord do bazy
    $ins = @mysql_query("INSERT INTO items SET item type='$type', item name='$name', author='$author', age='$issue', state='$book_condition', details='$desciption'");
    
    if($ins) echo "Record added correctly";
    else echo "Error - couldn't add this record";
    
    mysqli_close($connection);
    
?>