<?php

// For Loop
function printEvenNumbersWithForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

printEvenNumbersWithForLoop(2, 20, 2);

// While Loop
function printEvenNumbersWithWhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
}

printEvenNumbersWithWhileLoop(2, 20, 2);

// Do While Loop
function printEvenNumbersWithDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}

printEvenNumbersWithDoWhileLoop(2, 20, 2);