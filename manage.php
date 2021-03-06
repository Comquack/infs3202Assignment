<!doctype html>
<?php
session_start();
	include "phpmyadminconnect.php";
	
if(isset($_SESSION['username'])){
	$user = $_SESSION['username'];
		print("		<div id = \"logout\">
			Hello ".$_SESSION['username'].
			"<form method=\"POST\" action=\"logout.php\">
				<div class=\"container\">
					<button type=\"submit\">Logout</button>
				</div>
			</form>
		</div>");
		$stmt1 = $conn->prepare("SELECT * FROM booking, flights WHERE username = ? AND booking.flightID=flights.ID");
		$stmt1->bind_param("s", $user);
		$stmt1->execute();
		$result = $stmt1->get_result();
		print("<table id = \"bookings\"><tr><th>BookingID</th><th>FlightID</th><th>Flying From</th><th>Flying to</th>");
		while ($row = mysqli_fetch_array($result)){
			print("<tr>");
			print("<td>");
			   print($row['ID']);
			   print("</td>");
			   print("<td>");
			   print($row['FlightID']);
			   print("</td>");
			   print("<td>");
			   print($row['flyfrom']);
			   print("</td>");
			   print("<td>");
			   print($row['flyto']);
			   print("</td>");
			print("</tr>");
		}
		print("</table>");
		
}else{
header("Location: login.html");
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
			<form method=\"POST\" action=\"signup.html\">
				<div class=\"container\">
					<button type=\"submit\">Sign up</button>
				</div>
			</form>
		</div>");
	}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Travel test </title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
		
		<div id = "response">
		</div>
		<div id="footer">
			<ul>
				<a href="about.html"><li> About Us </li></a>
			</ul>
		</div>
	

				
		<script>
				$(document).ready(function() {
					if(document.getElementById('bookings')){
						document.getElementById('response').appendChild(document.getElementById('bookings'));
					}
				});
 		 </script>	
 		 		
	</body>
	