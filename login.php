<?php
	session_start();
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
?>