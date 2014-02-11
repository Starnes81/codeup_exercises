<?php



//creating function exercises

//add

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
	echo $a + $b . PHP_EOL;	
	} else {
		echo "Input must be numeric!\n";
	}
}
add('Steve', 10);

//subtract
function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	echo $a - $b . PHP_EOL;
    } else {
    	echo "Input must be numeric!\n";
    }
}
subtract('Dog', 15);

//multiply
function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	echo $a * $b . PHP_EOL;
    } else {
    	echo "Input must be numeric!\n";
    }
}
multiply('cat', 40.405);

//divide
function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	echo $a / $b . PHP_EOL;	
	} else {
		echo "Input must be numeric!\n";
	}
}
divide("HELLO", 30);

//modulus
function modulus($a , $b) {
	if (is_numeric($a) && is_numeric($b)) {
	echo ($a % $b) . PHP_EOL;
    } else {
    	echo "Input must be numeric!\n";
    }
}
modulus(60, 'MATH');

?>