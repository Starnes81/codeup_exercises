
<?php
//adding args

$min =1;
$max =100;


if ($argv[1] < $argv[2]) {
	$min = $argv[1];
	$max = $argv[2];
} else {
	$min = $argv[2];
	$max = $argv[1];
}
//high low game

fwrite(STDOUT, 'What is your name? ' );
//input name

$first_name = fgets(STDIN);
//say hello

fwrite(STDOUT, "Hello $first_name\n");

//rand number

$random_number = mt_rand($min,$max);


//guess

fwrite(STDOUT, 'Guess a number between {$min} and {$max}');

$guess_number = fgets(STDIN);

//if
while ($random_number <> $guess_number){

if ($guess_number > $random_number){
	echo "Too High!\n";
	fwrite(STDOUT, ' Guess again! ');
$guess_number = fgets(STDIN);
} 

if ($guess_number < $random_number){
	echo "Too low!\n";
	fwrite(STDOUT, 'Guess again! ');
$guess_number = fgets(STDIN);

} 
//elseif

}

Echo "Great Guess!\n";


//exit

