<?php
	//create an array with the information
	$array_information = array();
	//populate array
	$array_information[] = "Jake";
	$array_information[] = "Fee";
	$array_information[] = "19";
	$array_information[] = "117 Shaubut Street";
	$array_information[] = "The Cupboard Under the Stairs";
	$array_information[] = "Mankato";
	$array_information[] = "Minnesota";
	$array_information[] = "56001";

	//import other files
	require 'person.php';
	require 'address.php';
	//create objects
	$person = new Person;
	$address = new Address;

	//populate objects
	$person->firstName = $array_information[0]; 
	$person->lastName = $array_information[1];
	$person->age = $array_information[2];
	$address->street1 = $array_information[3];
	$address->street2 = $array_information[4];
	$address->city = $array_information[5];
	$address->state = $array_information[6];
	$address->zipCode = $array_information[7];

	//echo information
	echo $person->firstName." ";
	echo $person->lastName.", ";
	echo $person->age."<br><br>";
	echo $address->street1."<br>";
	echo $address->street2."<br>";
	echo $address->city.", ";
	echo $address->state."<br>";
	echo $address->zipCode."<br>";
?>