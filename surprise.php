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
				<button type = \"submit\">BOOK</button>
			</div>");
			$i = $i+1;
		}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Surprise me </title>
		<link rel="stylesheet" type="text/css" href="index.css">
				<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</head>
	
	<body>
		<div id="logo">
			<a href ="index1.php"><img src = "./images/airline.png" height="80px" width="80px"></a>
		</div> 
		
		<nav>
			<ol>
				<li><a href ="manage.php"> Manage Bookings</a> </li>
				<li><a href ="surprise.php">Surprise me</a></li>
			</ol>
		</nav>
		
		<div id="pickone">
	
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
