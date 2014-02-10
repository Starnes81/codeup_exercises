<?php
// prompt user for start and end number.
fwrite(STDOUT, 'Pick a starting number!');

$starting_number = fgets(STDIN);

if (!is_numeric($starting_number)) {
	echo " '{$starting_number}' is numeric ", PHP_EOL;
} else  {
		echo " '{$starting_number}' is NOT numeric ", PHP_EOL;	
}


fwrite(STDOUT, 'Pick a endinging number!');

$ending_number = fgets(STDIN);

if (!is_numeric($ending_number)) {
	echo " '{$ending_number}' is numeric ", PHP_EOL;
} else  {
	echo " '{$ending_number}' is NOT numeric ", PHP_EOL;
}

//add user increment

fwrite(STDOUT, 'Pick a number to count by!');

$num_pick = fgets(STDIN);
// added default increment
for ($i = $starting_number; $i <= $ending_number; $i += $num_pick) {
	echo "$i\n";
 if ($num_pick == 0){
 	echo $i ++;
 }
}

?>


