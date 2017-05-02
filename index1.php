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
				<li><a href ="manage.html"> Manage Bookings</a> </li>
				<li><a href ="surprise.html">Surprise me</a></li>
			</ol>
		</nav>
		
		<form method="POST" action="flight.php">
		<div class="travelbanner">
			<div class="container">
				<p><label><b>From</b></label>
				<select id = "from" name ="from"></select></p>
				
				<p><label><b>To</b></label>
				<select id = "to" name ="to"></select></p>
				
				<p><label><b>Number of Adults</b></label>
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
				</select></p>
				
				<label><b>Date from</b></label>
				<input type = "text" id="datepicker">
				
				<label><b>Date to</b></label>
				<input type = "text" id="datepicker2">
				
				<p><button type ="submit">GO</button></p>
				</div>
				<div id="map"></div>
				<script src="map.js" type="text/javascript"></script> 
				</script>
				<script src="poplists.js" type="text/javascript"></script> 
				</script>
				<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMy7POvCCYeCbQz5TO49LqidMkCEFin_A&callback=initMap">
				</script>

				
				
	</body>
	