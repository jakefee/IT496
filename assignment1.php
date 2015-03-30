<?php
	#find perimeter, area, sine, cosine, tangent of a triangle
	$side1 = 14.8;
	$side2 = 20.3;
	$side3 = 25.3;
	$angle1 = 36;
	$angle2 = 53;
	$angle3 = 91;

	function perimeter($a, $b, $c) {
		$perimeter = $a + $b + $c;
		return $perimeter;
	}

	function area($a, $b, $c) {
		#Heron's Formula
		$p = $a + $b + $c;
		$s = $p / 2;
		$area = sqrt(($s) * ($s - $a) * ($s - $b) * ($s - $c));
		return $area;
	}

	#Basic measurements
	echo "Sides: " . $side1 . ", " . $side2 . ", " . $side3;
	echo "<br>Angles: " . $angle1 . "*, " . $angle2 . "*, " . $angle3 . "*";
	#Perimeter and Area
	echo "<br><br>Perimeter: " . perimeter($side1, $side2, $side3);
	echo "<br>Area: " . area($side1, $side2, $side3);
	#Sine
	echo "<br><br>Sine of Angle 1: " . sin($angle1);
	echo "<br>Sine of Angle 2: " . sin($angle2);
	echo "<br>Sine of Angle 3: " . sin($angle3);
	#Cosine
	echo "<br><br>Cosine of Angle 1: " . cos($angle1);
	echo "<br>Cosine of Angle 2: " . cos($angle2);
	echo "<br>Cosine of Angle 3: " . cos($angle3);
	#Tangent
	echo "<br><br>Tangent of Angle 1: " . tan($angle1);
	echo "<br>Tangent of Angle 2: " . tan($angle2);
	echo "<br>Tangent of Angle 3: " . tan($angle3);
?>