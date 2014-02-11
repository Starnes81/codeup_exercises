<?php

// Create array to hold list of todo items
$items = array();

// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        //added $key=1 to out put 1 as default instead of 0
        $key = $key+1;
        // Display each item and a newline
        switch ($key) {
            case 0:

            break;
        
            default:
        echo "[{$key}]  {$item}\n";
        }
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
        $items[0] =array();
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        $key = $key-1;
        unset($items[$key]);

    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);
