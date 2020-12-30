<?php
 
// Initialize the session
session_start();
/*

1. Defined your server name.
2. Defined your user name.
3. Defined your password.

*/
$server =  "localhost";
$username = "root";
$password = "";
$db = "php";

// Create the connection with the database

$conn = new mysqli($server, $username, $password, $db);

// Check the connection that connected or not

if($conn->connect_error){
    die("Connection is failed to connect Kindly try again!".$conn->connect_error);
}

?>