<!doctype html>
<?php
session_start();
if(isset($_SESSION['username'])){
	
		print("		<div id = \"logout\">
			Hello ".$_SESSION['username'].
			"<form method=\"POST\" action=\"logout.php\">
				<div class=\"container\">
					<button type=\"submit\">Logout</button>
				</div>
			</form>
		</div>");
		
}else{
		print("		<div id = \"login\">
			<form method=\"POST\" action=\"login.php\">
				<div class=\"container\">
					<label><b>Username</b></label>
					<input type = \"text\" placeholder= \"Username\" name=\"username\">
					
					<label><b>Password</b></label>
					<input type=\"password\" placeholder= \"Password\" name=\"password\">
					
					<button type=\"submit\">Login</button>
				</div>
			</form>
		</div>");
	}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Surprise me </title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	
	<body>
		<div id="logo">
			<a href ="index1.php"><img src = "./images/airline.png" height="80px" width="80px"></a>
		</div> 
		
		<nav>
			<ol>
				<li><a href ="manage.html"> Manage Bookings</a> </li>
				<li><a href ="surprise.php">Surprise me</a></li>
			</ol>
		</nav>
		
		<div id="pickone">
			<div id ="pick1">
				<img src = "./images/airline.png" height="80px" width="80px">
				<button type = "submit">INFO</button>
				<button type = "submit">BOOK</button>
			<div>
			
			<div id ="pick2">
				<img src = "./images/airline.png" height="80px" width="80px">
				<button type = "submit">INFO</button>
				<button type = "submit">BOOK</button>
			</div>
			
			<div id = "pick3">
				<img src = "./images/airline.png" height="80px" width="80px">
				<button type = "submit">INFO</button>
				<button type = "submit">BOOK</button>
			</div>
		</div>
	</body>
</html>
