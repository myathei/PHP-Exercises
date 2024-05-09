<?php
// Function to check if $x is a power of $y
function is_Power($x, $y)
{
    // Assign initial values of $x and $y to variables $a and $b respectively
    $a = $x;
    $b = $y;

    // Loop until $x is divisible by $y
    while ($x % $y == 0) {
        // Divide $x by $y
        $x = $x / $y;
    }

    // Check if $x is equal to 1 after the loop
    if ($x == 1) {
        // If true, $a is a power of $b
        return "$a is power of $b";
    } else {
        // If false, $a is not a power of $b
        return "$a is not power of $b";
    }
}

// Testing the function with different inputs
print_r(is_Power(16,2)."\n");
print_r(is_Power(12,2)."\n");
print_r(is_Power(81,3)."\n");
?>