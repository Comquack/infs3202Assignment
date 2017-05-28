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
			<a href="index1.php"><img src = "./images/airline.png" alt="airline logo" height="80px" width="80px"></a>
		</div> 
			
		<nav>
			<ol>
				<li><a href ="index1.php"> HOME</a></li>
				<li><a href ="about.html"> ABOUT US </a></li>
				<li><a href ="manage.php"> BOOKINGS</a> </li>
				<li><a href ="surprise.php">SURPRISE ME</a></li>
			</ol>
		</nav>
			<form id="signup" method="POST" action="signup.php">
			  <div class="container">
			  	<p>
			  	<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				</p>
				
				<p>
				<label><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>
				</p>
				
				<p>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password1" required>
				</p>
				
				<p>
				<label><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="password2" required>
				</p>

				<div class="clearfix">
				  <a href = "index1.php"><button type="button"  class="cancelbtn">Cancel</button></a>
				  <button type="submit" class="signupbtn">Sign Up</button>
				</div>
			  </div>
			</form>
			
			<div id="footer">
			<ul>
				<a href="about.html"><li> About Us </li></a>
			</ul>
		</div>
			
	</body>
</html>