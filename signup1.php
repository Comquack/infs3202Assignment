<!doctype html>
<?php
session_start();
if(isset($_SESSION['error'])){
			print("	<div id = \"err\">
			".$_SESSION['error']."
		</div>");
}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Sign Up! </title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	
	<body>
		<div id="logo">
			<a href ="index1.php"><img src = "./images/airline.png" height="100px" width="100px">
		</div> 
			<form method="POST" action="signup.php">
			  <div class="container">
			  	<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>

				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password1" required>

				<label><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="password2" required>

				<div class="clearfix">
				  <button type="button"  class="cancelbtn">Cancel</button>
				  <button type="submit" class="signupbtn">Sign Up</button>
				</div>
			  </div>
			</form>
			
	</body>
</html>