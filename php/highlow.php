
<?php
//high low game

fwrite(STDOUT, 'What is your name?' );
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

if ($guess_number < $random_number{
	echo "To Low!";
}
//elseif
elseif ($guess_numer > $random_number){
	echo "To High!";
}

else ($guess_number == $random_number){
	echo "You Guessed Right!"
}




//exit