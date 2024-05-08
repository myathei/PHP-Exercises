<?php
// Function to check if a number is a power of three
function is_Power_of_three($n)
{
    // Assign $n to a variable $x for manipulation
    $x = $n;

    // Loop until $x is divisible by 3
    while ($x % 3 == 0) {
        // Divide $x by 3
        $x /= 3;
    }

    // Check if $x is equal to 1 after the loop
    if ($x == 1) {
        // If true, $n is a power of 3
        return "$n is power of 3";
    } else {
        // If false, $n is not a power of 3
        return "$n is not power of 3";
    }
}

// Testing the function with different inputs
print_r(is_Power_of_three(9)."\n");
print_r(is_Power_of_three(81)."\n");
