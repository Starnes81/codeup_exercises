<?php


function paramAreValid($a, $b) {
	if(!is_numeric($a) || !is_numeric($b)) {
		echo "ERROR!!! Input is not a number!" . PHP_EOL;
		var_dump($a);
		var_dump($b);
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
	if (paramAreValid($a, $b) && $b != 0) {
		if ($b == 0) {
			return FALSE;
	} else {
		return $a / $b; 	
	}
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


echo add('Steve', 10);
echo subtract('dog', 0);
echo multiply('cat', 40.405);
echo divide(50, 'dog');
echo modulus(60, 'MATH');



?>