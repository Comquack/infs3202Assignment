<!doctype html>
<?php
session_start();
include "phpmyadminconnect.php";
include "loginbar.php";

		if(!isset($_REQUEST['to'])){
		header("Location: index1.php");
	}
    $to = mysqli_real_escape_string($conn,$_REQUEST['to']);
		$stmt1 = $conn->prepare("SELECT * FROM flights WHERE flyto = ?");
		$stmt1->bind_param("s", $to);
		$stmt1->execute();
		$result = $stmt1->get_result();
		
		$count = mysqli_num_rows($result);
	if($count == 0){
		print("<div id=\"err\">flight not found</div>");
	}else{
		print("<div id = \"flights\"><table id = \'flight\'><tr><th>FlightID</th>");
		while ($row = mysqli_fetch_array($result)){
			print("<tr>");
			print("<td name = \"element\">");
			   print($row['ID']);
			   print("</td>");
			   print("<td name = \"john\">");
			   print($row['flyfrom']);
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
	</head>
	
	<body>
		<div id="logo">
			<a href ="index1.php"><img src = "./images/airline.png" height="80px" width="80px"></a>
		</div> 
			
		<nav>
			<ol>
				<li><a href ="index1.php"> Home</a> </li>
				<li><a href ="surprise.html">Surprise me</a></li>
			</ol>
		</nav>
		<div id = "response">
		</div>
				<form id = "fly" method="POST" action="bookflight.php">
		<div class="travelbanner">
			<div class="container">
				<p><label><b>Choose flight</b></label>
				<select id = "result" name ="result"></select></p>

				<p><button type ="submit">GO</button></p>
				</div>
	

				
		  	<script>
				$(document).ready(function() {
					if(document.getElementById('flights')){
						document.getElementById('response').appendChild(document.getElementById('flights'));
						var address = document.getElementsByName('element');
						console.log(address.length);
						var to = document.getElementById("result");
						for (var i=0; i < address.length; i++){
							console.log(i);
							opt = document.createElement("option");
							opt.text=address[i].textContent;
							to.add(opt);
						}
					}
					if(document.getElementById('err')){
						document.getElementById('response').appendChild(document.getElementById('err'));
					}
				});
 		 </script>		
	</body>
	