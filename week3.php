<?php

	$intArray = array(1, 2, 3);
	$stringArray = array("one", "two", "three");

	echo "FOR LOOP<br>";
	for($q = 0; $q < count($intArray); $q++) {
		echo $intArray[$q] . " = " . $stringArray[$q]. "<br>";
	}

	echo "<br>FOREACH LOOP<br>";
	forEach($intArray as $q) {
		echo $intArray[$q - 1] . " = " . $stringArray[$q - 1]. "<br>";
	}

	$q = 0;
	echo "<br>DO LOOP<br>";
	do {
		echo $intArray[$q] . " = " . $stringArray[$q]. "<br>";
		$q++;
	} while($q < count($intArray));

	$q = 0;
	echo "<br>WHILE LOOP<br>";
	while($q < count($intArray)) {
		echo $intArray[$q] . " = " . $stringArray[$q]. "<br>";
		$q++;
	}

	echo "<br>SWITCH CASE<br>";
	switch($intArray[2]) {
		case 1:
			echo $intArray[2] . " = 1";
			break;	
		case 2:
			echo $intArray[2] . " = 2";
			break;	
		case 3:
			echo $intArray[2] . " = 3";
			break;	
		default:
			echo "ERROR: $intArray[2] IS NOT EQUAL TO 1 OR 2 OR 3";
			break;
	}
?>