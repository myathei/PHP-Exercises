<?php
// Function to check if a number is ugly
function is_ugly($num)
{
    // Store the original number in a variable
    $z = $num;
    
    // Check if the number is 0
    if ($num == 0)
    {
        // If so, return a message indicating it's not an Ugly number
        return "$num is not an Ugly number";
    }
    
    // Define an array of prime factors that make a number ugly
    $x = array(2, 3, 5);
    
    // Iterate through each prime factor
    foreach ($x as $i)
    {
        // While the number is divisible by the current prime factor
        while ($num % $i == 0)
        {
            // Divide the number by the prime factor
            $num /= $i;
        }
    }
    
    // If the number becomes 1 after dividing by all prime factors
    if ($num == 1)
    {
        // Return a message indicating it's an Ugly number
        return "$z is an Ugly number";
    }
    else
    {
        // Otherwise, return a message indicating it's not an Ugly number
        return "$z is not an Ugly number";
    }
}

// Test the is_ugly function with different inputs and print the results
print(is_ugly(12) . "\n");
print(is_ugly(7) . "\n");
?>
