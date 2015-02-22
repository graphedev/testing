<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "Einstain81";
	$dbname = "testdb";
	
	$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname); // connect to the database
	
	if ($conn->connect_error) {  		// check if there is any error in connecting to the database
			trigger_error('Tidak bisa connect ke database: ' . $conn->connect_error, E_USER_ERROR);
	}

?>