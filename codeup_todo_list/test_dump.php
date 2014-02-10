<?php

// fwrite(STDOUT, 'What is <> ? ');

// $answer1 = fgets(STDIN);
// var_dump(trim($answer1));

// if ($answer1 == 'not equal\n') {
// 	echo "Correct!\n";
// } else {
// 	echo "In correct!\n";
// }

// 

// $i = 1;

// while (true) {

// 	echo $i . 
// 	$i ++;
// }


// $value = 'Hello!';

// switch (gettype($value)) {
//     case '$value is an integer';
// } elseif (gettype($value) == 'float') {
//     case '$value is a float';
// } elseif (gettype($value) == 'boolean') {
//     case '$value is a boolean';
// } elseif (gettype($value) == 'array') {
//     case '$value is an array';
// } elseif (gettype($value) == 'null') {
//     case '$value is null';
// } elseif (gettype($value) == 'string') {
//     case '$value is a string';
// }

// echo "\n"


// $value = 'Hello!';

// switch (gettype($value)) {
//     case 'integer':
//         echo '$value is an integer';
//         break;
//     case 'float':
//         echo '$value is a float';
//         break;        
//     case 'boolean':
//         echo '$value is a boolean';
//         break;            
//     case 'array':
//         echo '$value is an array';
//         break;
//     case 'null':
//         echo '$value is null';
//         break;        
//     case 'string':
//         echo '$value is a string';
//         break;            
// }


// lcfirst(str)

<?php

// Create array to hold list of todo items
$items = array();

// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        echo "[{$key}] {$item}\n";
    }

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = (strtoupper(trim(fgets(STDIN))));

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);
































?>
