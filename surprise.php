<!doctype html>
<?php
session_start();
include 'phpmyadminconnect.php';
include "loginbar.php";
		$stmt1 = $conn->prepare("SELECT * FROM locations ORDER BY RAND() LIMIT 4");
		$stmt1->execute();
		$result = $stmt1->get_result();
		$i = 1;
		while ($i<4 and $row = mysqli_fetch_array($result)){
			Print("<div id =\"pick".$i."\">
				<img src = \"./images/".$row['City'].".jpg\" height=\"80px\" width=\"80px\">
				".$row['City']."
				<form action = ".$row['link'].">
				<button type = \"submit\">INFO</button>
				</form>
				<form action = \"flightresultsurprise.php\"> 
					<button type = \"submit\" name=\"to\" value=\"".$row['name']."\">BOOK</button>
				</form>
			</div>");
			$i = $i+1;
		}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Surprise me </title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link href="https://fonts.googleapis.com/css?family=Monda" rel="stylesheet">
				<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</head>
	
	<body>
		<div id="logo">
			<img src = "./images/airline.png" height="80px" width="80px">
		</div> 
			
		<nav>
			<ol>
				<li><a href ="index1.php"> HOME</a></li>
				<li><a href ="about.html"> ABOUT US </a></li>
				<li><a href ="manage.php"> BOOKINGS</a> </li>
				<li><a href ="surprise.php">SURPRISE ME</a></li>
			</ol>
		</nav>
		
		<div id="pickone">
	
		</div>
		
		<div id="footer">
			<ul>
				<a href="about.html"><li> About Us </li></a>
				<a href=""><li> Contact Us </li></a>
			</ul>
				</div>
		<script>
				$(document).ready(function() {
					if(document.getElementById('pick1')){
						document.getElementById('pickone').appendChild(document.getElementById('pick1'));
					}
					if(document.getElementById('pick2')){
						document.getElementById('pickone').appendChild(document.getElementById('pick2'));
					}
						if(document.getElementById('pick3')){
						document.getElementById('pickone').appendChild(document.getElementById('pick3'));
					}
				});
 		 </script>	
	</body>
</html>
