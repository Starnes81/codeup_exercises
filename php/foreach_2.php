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
 
 
foreach ($books as $title => $book) {
	echo ("$title\n");
	// if ($key === "Published" && $value > 1950)
	   if ($book['published'] > 1950) {

	   }
	
}
 

echo "Published: " . $book['published'] . "\n";
echo "Auther: " . $book['author'] . "\n";
echo "Pages: " . $book['pages'] . "\n";

?>