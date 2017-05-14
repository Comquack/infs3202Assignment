<?php
	session_start();
	include "phpmyadminconnect.php";
	
	$user = mysqli_real_escape_string($conn,$_REQUEST['username']);
    $pass = mysqli_real_escape_string($conn,$_REQUEST['password1']);
	$pass2 = mysqli_real_escape_string($conn,$_REQUEST['password2']);
	$email = mysqli_real_escape_string($conn,$_REQUEST['email']);
	if($pass != $pass2 or $pass == ""){
			$_SESSION['error'] = "passwords do not match";
			header("Location: signup1.php");
			
	}
	$stmt1 = $conn->prepare("SELECT username FROM user_info WHERE username = ? OR email = ?");
		$stmt1->bind_param("ss", $user, $email);
		$stmt1->execute();
		$result = $stmt1->get_result();
	if(!$result){
die(mysqli_error($conn)); 
// useful for debugging
}
	$row = mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	if($count == 0){
		$passhash = hash('ripemd160',$pass);
		$stmt = $conn->prepare("INSERT INTO user_info VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $user, $passhash, $email);
		$stmt->execute();
		$_SESSION['username'] = $user;
		header("Location: index1.php");
	}
	else{
		$_SESSION['error'] = "username taken";
		header("Location: signup1.php");

	}
	mysqli_close($conn);
?>