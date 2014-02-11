<?php



for ($i =1; $i <= 100; $i++) {
	if ($i % 3) {
		echo "FIZZ\n";
	}
	if ($i % 5) {
		echo "BUZZ\n";
	}
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "FIZZBUZZ";
	}
	else {
		echo "$i\n";
	}
}



?>