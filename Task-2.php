<?php
for ($i = 1; $i <= 50; $i++) {
    // Check if $i is a multiple of 5
    if ($i % 5 == 0) {
        // Skip this iteration
        continue;
    }
    
    // Print the current number
    echo $i . " ";
}

// Output: 1 2 3 4 6 7 8 9 11 12 13 14 16 17 18 19 21 22 23 24 26 27 28 29 31 32 33 34 36 37 38 39 41 42 43 44 46 47 48 49 
?>
