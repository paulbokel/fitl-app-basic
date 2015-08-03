<?php
//Database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

//create a connection
$connection = new mysqli($servername, $username, $password);

//check for errors
if ($connection->connect_error){
	echo 'Connection failed: '. $connection->connect_error;
	exit;
}
?>