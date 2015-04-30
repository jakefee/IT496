<?php
	//include db file
	require 'connect.php';

	$person = $db->query("SELECT * FROM person");
	while ($row = $person->fetch_assoc()) {
		echo '<pre>', $row["first_name"], " ", $row["last_name"], ", ", $row["age"], '</pre>';
	}

	$address = $db->query("SELECT * FROM address");
	while ($row = $address->fetch_assoc()) {
		echo '<pre>', $row["street_1"], " ", $row["street_2"], "<br>", $row["city"], ", ", $row["state"], ", ", $row["zip_code"], '</pre>';
	}
?>