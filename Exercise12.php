<?php
// Function to reverse an integer
function reverse_integer($n)
{
    // Initialize variable to store the reversed integer
    $reverse = 0;
    
    // Loop until the input number becomes 0
    while ($n > 0)
    {
        // Multiply the current reversed number by 10 and add the last digit of the input number
        $reverse = $reverse * 10;
        $reverse = $reverse + $n % 10;
        
        // Remove the last digit from the input number
        $n = (int)($n / 10);
    }
    
    // Return the reversed integer
    return $reverse;
}   

// Test the reverse_integer function with different inputs and print the results
print_r(reverse_integer(1234) . "\n");
print_r(reverse_integer(23) . "\n");