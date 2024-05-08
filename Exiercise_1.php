<?php
// Function to check if a number is a power of two
function is_Power_of_two($n)
{
    // Check if the bitwise AND of $n and $n - 1 equals 0
    if(($n & ($n - 1)) == 0)
    {
        // If true, $n is a power of 2
        return "$n is power of 2";
    }
    else
    {
        // If false, $n is not a power of 2
        return "$n is not power of 2";
    }
}
// Testing the function with different inputs
print_r(is_Power_of_two(4)."\n");
print_r(is_Power_of_two(36)."\n");
print_r(is_Power_of_two(16)."\n");
?>