<?php


function validate() {
		echo "ERROR!!! Input is not a number!" . PHP_EOL;
}

//creating function exercises

//add

function add($a, $b = 0) {
	if (is_numeric($a) && is_numeric($b)){
	echo $a + $b . PHP_EOL;	
	} else {
		validate();
    } 
}
add('Steve', 10);



//subtract
function subtract($a, $b = 0) {
	if (is_numeric($a) && is_numeric($b)) {
	echo $a - $b . PHP_EOL;
    } else {
    	validate();
    }
}
subtract('dog', 0);


//multiply
function multiply($a, $b = 0) {
	if (is_numeric($a) && is_numeric($b)) {
	echo $a * $b . PHP_EOL;
    } else {
    	validate();
    }
}
multiply('cat', 40.405);

//divide
function divide($a, $b = 0) {
	 if ($b == 0) {
    	echo "You can not divide 0 by 0!\n";
	} elseif (is_numeric($a) && is_numeric($b)) {
		echo $a / $b . PHP_EOL;	
	} else {
		validate();
	}
}
divide(50, 0);

//modulus
function modulus($a , $b = 0) {
	if (is_numeric($a) && is_numeric($b)) {
	echo ($a % $b) . PHP_EOL;
    } else {
    	validate();
    } 
}
modulus(60, 'MATH');



?>