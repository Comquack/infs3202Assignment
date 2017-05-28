<!doctype html>
<?php
session_start();
include "loginbar.php";
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Travel test </title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link href="https://fonts.googleapis.com/css?family=Monda" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  		<script>
  		$( function() {
$('#datepicker').datepicker({
	minDate: 0,
	dateFormat: "yy-mm-dd"
});
   			$( "#datepicker2" ).datepicker({
				minDate: 0
			});
  		} );
 		 </script>
	</head>
	
	<body>
		<div id="logo">
			<img src = "./images/airline.png" alt="airline logo" height="80px" width="80px">
		</div> 
			
		<nav>
			<ol>
				<li><a href ="index1.php"> HOME</a></li>
				<li><a href ="about.html"> ABOUT US </a></li>
				<li><a href ="manage.php"> BOOKINGS</a> </li>
				<li><a href ="surprise.php">SURPRISE ME</a></li>
			</ol>
		</nav>
		
		<form id = "fly" method="POST" action="flightresult.php">
		<div class="travelbanner">
			<div class="container">
				<p><label><b>FROM</b></label>
				<select id = "from" name ="from"></select></p>
				
				<p><label><b>TO</b></label>
				<select id = "to" name ="to"></select></p>
				
				
				<label><b>DATE</b></label>
				<input type = "text" name ="datefrom" id="datepicker">

				<p><button type ="submit">GO</button></p>
			</div>
		</div>
		</form>

				<p><h3>Get Directions to the airport!</h3></p>
				<div id="map">
				</div>
				<div id="footer">
					<ul>
						<a href="about.html"><li> About Us </li></a>
					</ul>
				</div>
				<script src="map.js" type="text/javascript"></script> 
				</script>
				<script src="poplists.js" type="text/javascript"></script> 
				</script>
				<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMy7POvCCYeCbQz5TO49LqidMkCEFin_A&callback=initMap">
				</script>

				
				
	</body>
	