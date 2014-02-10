<?php
//created foreach.php file

$stuff = array('Person', "32", 6+28, array('pizza', 'cookies', 'steak'), 32.5);

foreach ($stuff as $things)
	if (is_numeric($things)) {
		echo "{$things} is a number\n";
	} elseif (is_string($things)) {
		echo "{$things} is a string\n";
	} elseif (is_float($things)) {
		echo "{$things} is a float\n";
	} elseif (is_array($things)) {
		echo "{$things} is an array\n";
	} foreach ($stuff as $everything) {
	echo "{$everything}\n";
}



//second loop
// $more_stuff = array(array("Dave", 'DAVE', 4), 2+4+6+8, 1==0);

foreach ($stuff as $things){
	if (is_scalar($things)) {
		echo "{$things} is scalar\n";
	}
}



?>

