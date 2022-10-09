<?php  
include 'datacontroller.php' ;

$name = $_GET['name'];

$person = personInfo($name);

	echo $person['name'];
	echo "<br>";
	echo $person['e-mail'];
	echo "<br>";
	echo $person['username'];
	echo "<br>";
	echo $person['gender'];
	echo "<br>";
	echo $person['dob'];
	echo "<br>";

?>