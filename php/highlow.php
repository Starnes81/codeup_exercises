
<?php
//high low game

fwrite(STDOUT, 'What is your name? ' );
//input name

$first_name = fgets(STDIN);
//say hello

fwrite(STDOUT, "Hello $first_name\n");

//rand number

$random_number = mt_rand(1,100);



//guess

fwrite(STDOUT, 'Guess a number between 1 and 100!');

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

Echo "Great Guess!";


//exit

