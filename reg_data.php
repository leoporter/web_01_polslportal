<?php
session_start();
// nawiązanie połączenia z bazą
require "connection.php";
// ustawienie bazy
mysql_select_db('users');

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$faculty = $_POST['faculty'];
$password2 = $_POST['password2'];

$wszystko_OK=false;

if(isset($email))
{
    // zmienna walidacyjna
    $wszystko_OK=true;
    
    if(isset($username))
    {
        $wszystko_OK=true;
    }
    else
    {
        $wszystko_OK=false;
        echo "Registration failed!";
        exit();
        header('Location: register.php');
        echo "Username missing";
    }
    
    if(isset($name))
    {
        $wszystko_OK=true;
    }
    else
    {
        $wszystko_OK=false;
        echo "Registration failed!";
        exit();
        header('Location: register.php');
        echo "Name missing";
    }
    
    if(isset($surname))
    {
        $wszystko_OK=true;
    }
    else
    {
        $wszystko_OK=false;
        echo "Registration failed!";
        exit();
        header('Location: register.php');
        echo "Surname missing";
    }
    
    if(isset($password))
    {
        $wszystko_OK=true;
    }
    else
    {
        $wszystko_OK=false;
        echo "Registration failed!";
        exit();
        header('Location: register.php');
        echo "Password missing";
    }
    
    if(isset($password2))
    {
        $wszystko_OK=true;
    }
    else
    {
        $wszystko_OK=false;
        echo "Registration failed!";
        exit();
        header('Location: register.php');
        echo "Password confirmation missing";
    }
    
    if($password2==$password)
    {
        $wszystko_OK=true;
    }
    else
    {
        $wszystko_OK=false;
        echo "Registration failed!";
        exit();
        header('Location: register.php');
        echo "Passwords don't match";
    }
    
    
    $haslo_hash = password_hash($password, PASSWORD_DEFAULT);
    
}
else
{
    $wszystko_OK=false;
    echo "Registration failed!";
    exit();
    header('Location: register.php');
    echo "Email missing!";
}

if($wszystko_OK==true)
{
    $q1=mysql_query("INSERT INTO users(name, surname, username, password, email, faculty) VALUES ('$name','$surname','$username','$password','$email','$faculty')");
    
    if(isset($q1))
    {
        sleep(3);
        header('Location: login.php');
    }
}
else
{
    echo "Registration failed!";
    exit();
    header('Location: register.php');
}





/*
// sprawdzenie warunku
if (isset($name) && isset($surname) && isset($username) && isset($password) && isset($password2) && isset($email) && isset($faculty)){
    if($password==$password2){
        
        // zapytanie do bazy
        $q1=mysql_query("INSERT INTO users(name, surname, username, password, email, faculty) VALUES ('$name','$surname','$username','$password','$email','$faculty')");
        $wszystko_OK=true;
        $_SESSION['log_on'] = true;
        header('Location: PolslPortal_afterlogin.php');
    }
    else {
        header('Location: register.php');
        echo "Passwords don't match!";
        exit();
    }
} 
else{
    header('Location: register.php');
    echo "Wrong data!";
}
*/
// zamykamy połączenie
mysql_close($connection); 

?>