<?php

// Create array to hold list of todo items
$items = array();



function list_items($list) {
    $result = '';

    foreach ($list as $key => $item) {
        $newIndex = $key + 1;
        $result .= "$newIndex"  .' '. $item .  PHP_EOL;
    }
    return $result;
}

function get_input($upper = FALSE){ 
    $input = trim(fgets(STDIN));
    return $upper ? strtoupper($input) : $input;
    }



// The loop!
do {
    // Iterate through list items
  
    echo list_items($items);
    

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort, (Q)uit : ';

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
    } elseif ($input == 'S') {
        //ask for order
        echo 'Order (A)-Z or (Z)-A: ';
        $input = get_input(TRUE);
        //created menu to choose sort order
        if ($input == 'A'){
            sort($items);
        } elseif ($input == 'Z') {
            rsort($items);
        } else {
            echo "Enter A for A-Z or Z for Z-A!";
        }
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);

