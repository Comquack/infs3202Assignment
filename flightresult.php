<!doctype html>
<?php
session_start();
include "phpmyadminconnect.php";
include "loginbar.php";

		if(!isset($_REQUEST['from'])){
		header("Location: index1.php");
	}
	$from = mysqli_real_escape_string($conn,$_REQUEST['from']);
    $to = mysqli_real_escape_string($conn,$_REQUEST['to']);
	$add = mysqli_real_escape_string($conn,$_REQUEST['adults']);
	$child = mysqli_real_escape_string($conn,$_REQUEST['child']);
	$date = mysqli_real_escape_string($conn,$_REQUEST['datefrom']);
	$class = mysqli_real_escape_string($conn,$_REQUEST['flightclass']);

		$stmt1 = $conn->prepare("SELECT * FROM flights WHERE flyto = ? AND flyfrom = ? AND date = ?");
		$stmt1->bind_param("sss", $to, $from, $date);
		$stmt1->execute();
		$result = $stmt1->get_result();
		
		$count = mysqli_num_rows($result);
	if($count == 0){
		print("<div id=\"err\">flight not found</div>");
	}else{
		print("<div id = \"flights\"><table id = \'flight\'><tr><th>FlightID</th>");
		while ($row = mysqli_fetch_array($result)){
			print("<tr>");
			print("<td>");
			   print($row['ID']);
			   print("</td>");
			print("</tr>");
		}
		print("</table></div>");
	}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Available Filights </title>
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
		<div id = "response">
		</div>
		
	

				
		  	<script>
				$(document).ready(function() {
					if(document.getElementById('flights')){
						document.getElementById('response').appendChild(document.getElementById('flights'));
					}
					if(document.getElementById('err')){
						document.getElementById('response').appendChild(document.getElementById('err'));
					}
				});
 		 </script>		
	</body>
	