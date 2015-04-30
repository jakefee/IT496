<?php
	//input characters.txt
	$characters = array();
	$cL = -1;
	$inputFile = fopen("characters.txt", "r") or die("ERROR: UNABLE TO OPEN FILE");
	//create array of all characters from characters.txt
	while(!feof($inputFile)) {
		$characters[] = fgets($inputFile);
		$cL++;
	}

	//connect to sql database
	mysql_connect("localhost", "root", "");
	$db = mysql_select_db("week5");
	if ($db) {echo "SUCCESS: DATABASE FOUND<br>";} else {echo "ERROR: DATABASE NOT FOUND";}

	//user chooses the length of the password
	//$passwordLength = $_POST["length"];
	$passwordLength = rand(3, 30);
	$passwordArray = array();

	//create a random password array using characters.txt
	for($q = 1; $q <= $passwordLength; $q++) {
		$passwordArray[] = $characters[rand(0, $cL)];
	}
	//create a password string from the password array
	$passwordStr = implode($passwordArray);
	$passwordStr = preg_replace('/\s+/', '', $passwordStr);
	echo "pass: " . $passwordStr;
	echo "<br>";

	//encrypt the generated password
	$encryptedPassword = encrypt($passwordStr);
	echo "hash: " . $encryptedPassword;

	//insert generated password into the database
 	mysql_query("INSERT INTO `week5`.`User_Information` (`Hashes`) VALUES ('" . $encryptedPassword . "')");

/////////////////////////////  FUNCTIONS  /////////////////////////////

	//encrypt password
	function encrypt($input) {
		$mult = 1;
		$addi = "";
		for($q = 0; $q < strlen($input); $q++) {
			$c = substr($input, $q, 1);
			$mult = $mult * ord($c);
			$addi = $addi . ord($c);
		}
		$addi = intval($addi);
		$hash = $mult / $addi;
		echo "SUCCESS: PASSWORD ENCRYPTED<br>";
		return $hash;
	}
?>