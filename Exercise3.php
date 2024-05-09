<?php
// Function to check if a number is a power of four
function is_Power_of_four($n)
{
    // Assign $n to a variable $x for manipulation
    $x = $n;

    // Loop until $x is divisible by 4
    while ($x % 4 == 0) {
        // Divide $x by 4
        $x /= 4;
    }

    // Check if $x is equal to 1 after the loop
    if ($x == 1) {
        // If true, $n is a power of 4
        return "$n is power of 4";
    } else {
        // If false, $n is not a power of 4
        return "$n is not power of 4";
    }
}

// Testing the function with different inputs
print_r(is_Power_of_four(4)."\n");
print_r(is_Power_of_four(36)."\n");
print_r(is_Power_of_four(16)."\n");
?>