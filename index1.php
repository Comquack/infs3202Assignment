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
			<img src = "./images/airline.png" height="80px" width="80px">
		</div> 
			
		<nav>
			<ol>
				<li><a href ="manage.php"> Manage Bookings</a> </li>
				<li><a href ="surprise.php">Surprise me</a></li>
			</ol>
		</nav>
		
		<form id = "fly" method="POST" action="flightresult.php">
		<div class="travelbanner">
			<div class="container">
				<p><label><b>From</b></label>
				<select id = "from" name ="from"></select></p>
				
				<p><label><b>To</b></label>
				<select id = "to" name ="to"></select></p>
				
				
				<label><b>Date from</b></label>
				<input type = "text" name ="datefrom" id="datepicker">

				<p><button type ="submit">GO</button></p>
				</div>
				
				
				<p>Get Directions from where you are to the airport!</p>
				<div id="map"></div>
				<script src="map.js" type="text/javascript"></script> 
				</script>
				<script src="poplists.js" type="text/javascript"></script> 
				</script>
				<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMy7POvCCYeCbQz5TO49LqidMkCEFin_A&callback=initMap">
				</script>

				
				
	</body>
	