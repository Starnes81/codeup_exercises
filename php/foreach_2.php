<?php


$books = array(
	'The Hobbit' => array(
		'published' => 1937,
		'author' => 'J. R. R. Tolkien',
		'pages' => 310
	),
	'Game of Thrones' => array(
		'published' => 1996,
		'author' => 'Georage R. R. Martin',
		'pages' => 835
	),
	'The Cacther in the Rye' => array(
		'published' => 1951,
		'author' => 'J.D. Salinger',
		'pages' => 220
	),
	'A Tale of Two Cities' => array(
		'published' => 1859,
		'author' => 'Charles Dickens',
		'pages' => 544
	)
	
);
 
 // $titles = ('The Hobbit', 'Game of Thrones', 'The Catcher in the Rye', 'A take of Two Cities');

foreach ($books as $key => $value) {
	// foreach ($book as $key => array) {
	// }
	echo ("Books title is $key\n");
}




?>