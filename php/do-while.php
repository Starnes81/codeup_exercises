<?php 

$a = 2;

do {
	echo "\$a is equal to {$a}\n";
	$a += 2;
}  while ( $a <= 100);



$b = 100;

do { 
	echo "\$b is equal to {$b}\n";
	$b -= 5;
} while ($b >= -10);


$c = 2;

do {
	echo "\$c is equal to {$c}\n";
	$c *= $c;
} while ($c <= 1000000);
?>