<?php
// Function to reverse the bits of an integer
function reverse_integer($n)
{
    // Initialize a variable to store the reversed integer
    $result = 0;
    
    // Loop through 32 bits (assuming integers are represented by 32 bits)
    for ($i = 0; $i < 32; $i++)
    {
        // Shift the result to the left by 1 bit
        $result <<= 1;
        
        // OR operation to set the least significant bit of result with the least significant bit of n
        $result |= ($n & 1);
        
        // Shift n to the right by 1 bit
        $n >>= 1;
    }
    
    // Return the reversed integer
    return $result;
}   

// Test the reverse_integer function with input 1234 and print the result
print_r(reverse_integer(1234) . "\n");
?>