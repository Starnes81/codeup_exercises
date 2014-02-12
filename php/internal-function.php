<?php



$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function varCheck($var, $var_name) {
	if (empty($variable)) {
		echo "$var_name is EMPTY" . PHP_EOL;
	} else {
		echo "$var_name is Not EMPTY";
	}
	if (isset($var_name)) {
		echo "$var_name is SET";
	} else {
		echo "$var_name is Not SET"
    }
}
// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results




































?>