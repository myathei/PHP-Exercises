<?php
// Function to add digits of a number until a single digit is obtained
function add_digits($num)
{
    // Check if the number is positive
    if ($num > 0)
    {
        // If positive, return the sum of digits modulo 9 plus 1
        return ($num - 1) % 9 + 1;
    }
    else
    {
        // If negative or zero, return 0
        return 0;
    }
}

// Test the add_digits function with different inputs and print the results
print_r(add_digits(48) . "\n");
print_r(add_digits(59) . "\n");
?>