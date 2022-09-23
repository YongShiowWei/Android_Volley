<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "lingualearning_app";
	$conn = new mysqli($server, $username, $password, $database);

	//check connection
	if($conn->connect_error){
		die("Connection failed:".$conn->connect_error);
	}

?>