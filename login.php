<?php
	session_start();
	include 'phpmyadminconnect.php';
	
	$user = mysqli_real_escape_string($conn,$_REQUEST['username']);
    $pass = mysqli_real_escape_string($conn,$_REQUEST['password']);
	$passhash = hash('ripemd160',$pass);
		$stmt1 = $conn->prepare("SELECT username FROM user_info WHERE username = ? and password = ?");
		$stmt1->bind_param("ss", $user, $passhash);
		$stmt1->execute();
		$result = $stmt1->get_result();
	if(!$result){
die(mysqli_error($conn)); 
// useful for debugging
}
	$row = mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	if($count == 1){
		$_SESSION['username'] = $user;
		header("Location: index1.php");
	}
	else{
		header("Location: index1.php");

	}
	mysqli_close($conn);
?>