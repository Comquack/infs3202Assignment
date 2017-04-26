<?php
	session_start();
	$servername = "localhost";
	$username = "username";
	$password = "password";
// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
		//die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	if($_REQUEST['username']=="infs" && $_REQUEST['password']=="3202"){
		$_SESSION['username'] = "infs";
		$_SESSION['password'] = "3202";
		echo "yes";
		header("Location: index1.php");
	}
	else{
		echo "no";
		header("Location: index1.php");
	}
	mysqli_close($conn);
?>