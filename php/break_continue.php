<?php


for ($i =1; $i <= 100; $i++) {
	if ($i % 2 == 0) {	
	echo $i . "\n";
	continue;
	}
	echo "ALL THE EVEN NUMBERS!\n";
} 


for ($i = 1; $i <= 100; $i++) {
	if ($i == 10) {
		break;
	}
		echo $i . "\n";
}



?>