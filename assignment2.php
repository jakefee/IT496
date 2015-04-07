<?php
	//branching = extra points?!?!?!
	
	$array_all = array();
	$array_int = array();
	$array_string = array();
	//open text file
	$inputFile = fopen("input.txt", "r") or die("ERROR: UNABLE TO OPEN FILE");
	//input text to an array
	while(!feof($inputFile)) {
		$array_all[] = fgets($inputFile);
	}

	//put array items into the correct arrays
	echo "ARRAY_ALL<br>";
	foreach($array_all as $q) {
		//sort data into int and string arrays
		if((int)$q == 0 && $q != "0") {
			$array_string[] = $q;
		} else {
			$array_int[] = (int)$q;
		}
		echo $q . "<br>";
	}

	//sort string array
	asort($array_string);
	//sort int array
	asort($array_int);

	//echo string array
	echo "<br>ARRAY_STRING<br>";
	foreach($array_string as $q) {
		echo $q . "<br>";
	}
	echo "<br>ARRAY_INT<br>";
	//echo int array
	foreach($array_int as $q) {
		echo $q . "<br>";
	}

	//close file
	fclose($inputFile);
?>