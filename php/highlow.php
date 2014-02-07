
<?php
//high low game

fwrite(STDOUT, 'What is your name?' );
//input name

$first_name = fgets(STDIN);
//say hello

fwrite(STDOUT, "Hello $first_name\n");

//rand number

mt_rand(1,100);

//guess

fwrite(STDOUT, 'Guess a number between 1 and 100!');

$guess_number = fgets(STDIN);

//if

if ($guess_number < mt_rand()){
	echo "To Low!";
}
//elseif
elseif ($guess_numer > mt_rand()){
	echo "To High!";
}

else ($guess_number == mt_rand()){
	echo "You Guessed Right!"
}




//exit