<?php


$counterValue = 0;
$COUNTER_FILENAME ="counter.txt";

if (file_exists($COUNTER_FILENAME)) {
	$file = fopen($COUNTER_FILENAME,"r");
	$counterValue = fread($file, filesize($COUNTER_FILENAME));
	fclose($file);
}
return $counterValue;
?>