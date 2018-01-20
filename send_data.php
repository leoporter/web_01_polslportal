<?php
// nawiązanie połączenia z bazą
require "connection.php";
// ustawienie bazy
mysql_select_db('items');

$type = $_POST['type'];
$name = $_POST['name'];
$author = $_POST['author'];
$issue = $_POST['issue'];
$book_condition = $_POST['book_condition'];
$description = $_POST['description'];
$price = $_POST['price'];

// zapytanie do bazy
$q1=mysql_query("INSERT INTO items(item_type, item_name, author, age, state, details, price) VALUES ('$type','$name','$author','$issue','$book_condition','$description','$price')");


// sprawdzenie warunku
if ($connection && isset($q1)){
    echo "New record has been added successfully!";
} 
else{
    echo "Error appeared! I couldn't add the record :-(";
}

// zamykamy połączenie
mysql_close($connection); 
// przekierowanie do strony z dodanymi ofertami 
header('Location: PolslPortal_afterlogin.php');

?>