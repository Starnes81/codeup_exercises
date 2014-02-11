<?php


function paramAreValid($a, $b) {
	if(!is_numeric($a) || !is_numeric($b)) {
		echo "ERROR!!! Input is not a number!" . PHP_EOL;
		return false;
		} else {
		return true;
	}
}

//creating function exercises

//add

function add($a, $b = 0) {
	if (paramAreValid($a, $b)){
	return $a + $b;
	} else {
	return 0;
    } 
}



//subtract
function subtract($a, $b = 0) {
	if (paramAreValid($a, $b)) {
		return $a - $b;
    } else {
    	return 0;
    }
}


//multiply
function multiply($a, $b = 0) {
	if (paramAreValid($a, $b)) {
		return $a * $b;
    } else {
   	 	return 0;
    }
}

//divide
function divide($a, $b = 0) {
	if ($b == 0) {
		echo "ERROR can not divide 0!\n";
		return FALSE;
	} elseif (paramAreValid($a, $b)) {
		return $a / $b; 
	}	
}

//modulus
function modulus($a , $b = 0) {
	if (paramAreValid($a, $b)) {
		return $a % $b;
    } else {
    	return 0;
    } 
	}


add('Steve', 10);
subtract('dog', 0);
multiply('cat', 40.405);
divide(50, 0);
modulus(60, 'MATH');



?>