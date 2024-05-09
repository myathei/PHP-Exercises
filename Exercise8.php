<?php
// Function to calculate the square root of a number using the Newton's method
function my_sqrt($n)
{
    // Initialize variables $x and $y
    $x = $n;
    $y = 1;

    // Loop until $x is greater than $y
    while($x > $y)
    {
        // Update $x and $y according to Newton's method
        $x = ($x + $y) / 2;
        $y = $n / $x;
    }

    // Return the calculated square root
    return $x;
}

// Test the my_sqrt function with different inputs and print the results
print_r(my_sqrt(16)."\n");
print_r(my_sqrt(14)."\n");
?>