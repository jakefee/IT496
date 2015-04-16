<?php
	require 'person.php';
	require 'address.php';

	$person = new Person;
	$address = new Address;

	$person->firstName = "Jake"; 
	$person->lastName = "Fee";
	$person->age = "19";
	echo $person->lastName;

	$address->street1 = "117 Shaubut Street";
	$address->street2 = "Room Under the Stairs";
	$address->city = "Mankato";
	$address->state = "Minnesota";
	$address->zipCode = "56001";
	echo $address->state;
?>