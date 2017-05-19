<?php
	session_start();
	include "phpmyadminconnect.php";
	$dom = new DOMDocument("1.0");
	$node = $dom->createElement("airport");
	$parnode = $dom->appendChild($node);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$query = "SELECT * FROM locations";
    $result = mysqli_query($conn,$query);
	if(!$result){
die(mysqli_error($conn)); 
}
	$count = mysqli_num_rows($result);
	
while ($row = mysqli_fetch_array($result)){
  $node = $dom->createElement("airports");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("name",$row['address']);
  $newnode->setAttribute("address", $row['name']);
}
echo $dom->saveXML();

	
	mysqli_close($conn);
?>