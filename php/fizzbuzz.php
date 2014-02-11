<?php



for ($i =1; $i <= 100; $i++) {
	if ($i % 3 == 0) {
		echo "FIZZ\n";
	}
	elseif ($i % 5 == 0) {
		echo "BUZZ\n";
	}
	elseif ($i % 3 == 0 && $i % 5 == 0) {
		echo "FIZZBUZZ\n";
	}
	else {
		echo "$i\n";
	}
}



?>