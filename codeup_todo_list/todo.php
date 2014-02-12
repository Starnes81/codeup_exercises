<?php

// Create array to hold list of todo items
$items = array();

// function list_items($list) {
//     $key = $key=1; 
//     foreach ($list as $key => $item) {
//     return var_dump($list);

//     }
// }

function list_items($list) {
    $result = '';
    foreach ($list as $key => $item) {
        $result .= "$key"  .' '. $item .  PHP_EOL;
    }
    return $result;
}

function get_input($upper = FALSE){ 
    if ($upper) {
        return (strtoupper(trim(fgets(STDIN))));
    } else {
        return trim(fgets(STDIN));
    }

}

// The loop!
do {
    // Iterate through list items
    // foreach ($items as $key => $item) {
    //     //added $key=1 to out put 1 as default instead of 0
    //     $key = $key+1;
    //     // Display each item and a newline
    //     switch ($key) {
    //         case 0:

    //         break;
        
    //         default:
    echo list_items($items);
    

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);


    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[$key - 1]);

    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);

