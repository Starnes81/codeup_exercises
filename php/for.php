<?php
// prompt user for start and end number.
fwrite(STDOUT, 'Pick a starting number!');

$starting_number = fgets(STDIN); 

fwrite(STDOUT, 'Pick a endinging number!');

$ending_number = fgets(STDIN); 

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


