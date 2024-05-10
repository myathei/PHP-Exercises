<?php
// Function to generate Collatz sequence for a given number
function collatz_sequence($x)
{
    // Initialize an array to store the sequence
    $num_seq = [$x];
    
    // Check if the input is less than 1
    if ($x < 1)
    {
        // If so, return an empty array
        return [];
    }
    
    // Loop until the number becomes 1
    while ($x > 1)
    {
        // If the number is even, divide it by 2
        if ($x % 2 == 0)
        {
            $x = $x / 2;
        }
        // If the number is odd, multiply it by 3 and add 1
        else
        {
            $x = 3 * $x + 1;
        }
        
        // Add the current number to the sequence
        array_push($num_seq, $x);
    }
    
    // Return the generated sequence
    return $num_seq;
}

// Test the collatz_sequence function with different inputs and print the results
print_r(collatz_sequence(12));
print_r(collatz_sequence(19));
?>
