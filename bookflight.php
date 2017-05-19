<?php
	session_start();
	include "phpmyadminconnect.php";
	if(isset($_SESSION['username'])){	
	$user = $_SESSION['username'];
	$ID = mysqli_real_escape_string($conn,$_REQUEST['result']);
	$stmt1 = $conn->prepare("SELECT * FROM booking WHERE FlightID = ? AND username =?");
		$stmt1->bind_param("ss", $ID, $user);
		$stmt1->execute();
		$result = $stmt1->get_result();
	if(!$result){
die(mysqli_error($conn)); 
// useful for debugging
}
	$row = mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	if($count == 0){
		$stmt = $conn->prepare("INSERT INTO booking VALUES (NULL,? ,?)");
		$stmt->bind_param("ss", $ID,$user);
		$stmt->execute();
		header("Location: manage.php");
	}else{header("Location: manage.php");}
}else{
		header("Location: signup1.php");
}
	mysqli_close($conn);
?>