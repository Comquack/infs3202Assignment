<!doctype html>
<?php
session_start();
if(isset($_SESSION['username'])){
	echo "Hello ".$_SESSION['username'];
		print("		<div id = \"logout\">
			<form method=\"POST\" action=\"logout.php\">
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
		<title> Travel test </title>
	</head>
	
	<body>
		<div id="logo">
			<img src = "">
		</div> 
		<nav>
			<ol>
				<li> Manage Bookings </li>
				<li> Surprise me </li>
			</ol>
		</nav>
		
		<form method="POST" action="flight.php">
		<div class="travelbanner">
			<div class="container">
				<label><b>From</b></label>
				<input type = "text" placeholder = "From" name="travelfrom">
				
				<label><b>To</b></label>
				<input type = "text" placeholder = "To" name="travelto">
				
				<label><b>Number of Adults</b></label>
				<select name ="adults">
					<option value = "1">1</option>
					<option value = "2">2</option>
					<option value = "3">3</option>
					<option value = "4">4</option>
					<option value = "5">5</option>
					<option value = "6">6</option>
					<option value = "7">7</option>
					<option value = "8">8</option>
					<option value = "9">9</option>
					<option value = "10">10</option>
				</select>
				
				<label><b>Number of Children</b></label>
				<select name ="child">
					<option value = "1">1</option>
					<option value = "2">2</option>
					<option value = "3">3</option>
					<option value = "4">4</option>
					<option value = "5">5</option>
					<option value = "6">6</option>
					<option value = "7">7</option>
					<option value = "8">8</option>
					<option value = "9">9</option>
					<option value = "10">10</option>
				</select>
				
				<label><b>Flight Class</b></label>
				<select name ="flightclass">
					<option value = "economy">Economy</option>
					<option value = "business">Business</option>
					<option value = "firstclass">First Class</option>
				</select>
				
				<button type ="submit">GO</button>
				
				
	</body>
	