<?php
// prompt user for start and end number.
fwrite(STDOUT, 'Pick a starting number!');

$starting_number = fgets(STDIN); 

fwrite(STDOUT, 'Pick a endinging number!');

$ending_number = fgets(STDIN); 



for ($i = $starting_number; $i <= $ending_number; $i +=1) {
	echo "$i\n";
}


?>


