<?php
	
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];
$address = $_POST["address"];
$zip = $_POST["zip"];

#initializes database
include 'conex.php';

$insert = "INSERT INTO USConsulates (city,state,country,address,zip)
VALUES ('$city','$state','$country','$address','$zip')";

if($mysqli->query($insert) === TRUE){
	echo "New record created successfully!";
	sleep(5);
}
else{
	echo"Error: ". $insert . "<br>".$mysqli->error;
}
	
include 'close.php';
header("Location: http://people.eecs.ku.edu/~djoseph/TravelPlan/USConsulateProcessing.html");
	
?>