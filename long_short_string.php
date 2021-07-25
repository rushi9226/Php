<?php

	$array  = array("Arjun","Vyanktesh","Utshav","Mahendarshin","AmbatiRaydu","zeel");
	$longest = max(array_map('strlen', $array));
	$shortest = min(array_map('strlen', $array));
	echo "Shortest string and Longest string length in Array:"."<br>"."<br>";
	echo "The shortest string length is ".$shortest."<br>";
	echo "The longest string length is ".$longest;
?>

