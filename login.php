<?php
session_start();
if($_REQUEST['username']=="infs" && $_REQUEST['password']=="3202"){
	$_SESSION['username'] = "infs";
	$_SESSION['password'] = "3202";
//	header(“Location: gallery.php”);
}
else{
//	header(“Location: loginform.php”);
}
?>