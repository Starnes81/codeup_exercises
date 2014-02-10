<?php



for ($i =1; $i <= 100; $i++) {
	echo "$i\n";

$fizz = ($i % 3 == 0);
$buzz = ($i % 5 == 0);

if ($i == $fizz) {
	echo "FIZZ\n";
}

if ($i == $buzz) {
	echo "BUZZ\n";
}

elseif ($fizz&&$buzz) {
	echo "$i\n";
}

}



?>