<!doctype html>
<?php
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "your_password";
	$database = "users";
	
if(isset($_SESSION['username'])){
	$user = $_SESSION['username'];
	$conn = new mysqli($servername, $username, NULL, $database);
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
		print("		<div id = \"logout\">
			Hello ".$_SESSION['username'].
			"<form method=\"POST\" action=\"logout.php\">
				<div class=\"container\">
					<button type=\"submit\">Logout</button>
				</div>
			</form>
		</div>");
		$stmt1 = $conn->prepare("SELECT * FROM booking WHERE username = ?");
		$stmt1->bind_param("s", $user);
		$stmt1->execute();
		$result = $stmt1->get_result();
		print("<table>");
		while ($row = mysqli_fetch_array($result)){
			   print($row);
 
		}
		print("</table>");
		
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
  		<script>
  		$( function() {
   			$( "#datepicker" ).datepicker({
				minDate: 0
			});
   			$( "#datepicker2" ).datepicker({
				minDate: 0
			});
  		} );
 		 </script>
	</head>
	
	<body>
		<div id="logo">
			<img src = "./images/airline.png" height="80px" width="80px">
		</div> 
			
		<nav>
			<ol>
				<li><a href ="index1.php"> Home</a> </li>
				<li><a href ="surprise.html">Surprise me</a></li>
			</ol>
		</nav>
		
	

				
				
	</body>
	