<!-- Set connection variables -->
<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db  = 'bankingsystem';

// Create a database connection
$conn = mysqli_connect($server, $username, $password , $db);

// Check for connection success
if(!$conn){
    die("Connection Failed " . mysqli_connect_error());
}
 
?>