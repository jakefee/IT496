<?php

	function grossIncome($salary, $bonus) {
		return $salary + $bonus;
	}

	function netIncome($grossIncome, $state) {
		$tax = 1;
		if($state == "Minnesota") {$tax = 0.25;}
		if($state == "Iowa") {$tax = 0.35;}
		if($state == "Wisconsin") {$tax = 0.40;}
		return $grossIncome * (1 - $tax);
	}

	$myGrossIncome = grossIncome(90000, 7000);
	$myNetIncome = netIncome($myGrossIncome, "Minnesota");
	echo "Gross Income: $" . $myGrossIncome;
	echo "<br>Net Income: $" . $myNetIncome;
?>