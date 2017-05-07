<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "your_password";
	$database = "users";
// Create connection
	$conn = new mysqli($servername, $username, NULL, $database);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$user = mysqli_real_escape_string($conn,$_REQUEST['username']);
    $pass = mysqli_real_escape_string($conn,$_REQUEST['password']);
	$pass2 = mysqli_real_escape_string($conn,$_REQUEST['password2']);
	$email = mysqli_real_escape_string($conn,$_REQUEST['email']);
	if($pass == $pass2){
		
	}
	$query = "SELECT username FROM user_info WHERE username = '$user'";
    $result = mysqli_query($conn,$query);
	if(!$result){
die(mysqli_error($conn)); 
// useful for debugging
}
	$row = mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	if($count == 0){
		$query = "INSERT INTO username ('$user','$pass',$email)";
		header("Location: index1.php");
	}
	else{
		echo $query;
		header("Location: index1.php");

	}
	mysqli_close($conn);
?>