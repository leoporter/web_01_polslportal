<?php

$servername = "localhost";
$username = "username";
$password = "";
$dbname = "polslportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$type = $_POST['type'];
$name = $_POST['name'];
$author = $_POST['author'];
$issue = $_POST['issue'];
$book_condition = $_POST['book_condition'];
$description = $_POST['description'];

$sql = "INSERT INTO items (item_type, item_name, author, age, state, details)
VALUES ('$type','$name','$author','$issue','$book_condition','$description');";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>