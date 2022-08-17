<?php

// $databaseHost = 'localhost';//or localhost
// $databaseName = 'test'; // your db_name
// $databaseUsername = 'root'; // root by default for localhost 
// $databasePassword = '';  // by defualt empty for localhost

$host="localhost:3307";
$user="root";
$password="";
$db="demo";

// $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$conn=mysqli_connect($host, $user, $password, $db );
 
?>
