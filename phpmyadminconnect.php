<?php

	$servername = "localhost";
	$username = "pmal";
	$password = "KTsLTdcPl4LBgJph";
	$database = "users";
// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

?>