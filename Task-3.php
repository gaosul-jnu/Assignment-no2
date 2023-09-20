<?php
$first = 0;
$second = 1;

for ($i = 1; $i <= 10; $i++) {
    $fibonacci = $first + $second;
    
    // Check if the Fibonacci number is greater than 100
    if ($fibonacci > 100) {
        break;
    }
    
    // Print the current Fibonacci number
    echo $fibonacci . " ";

    // Update the values for the next iteration
    $first = $second;
    $second = $fibonacci;
}

?>