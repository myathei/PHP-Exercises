<?php
// Function to check if a number is a Hamming number
function is_hamming_numbers($x)
{
    // Check if the number is 1, which is always a Hamming number
    if ($x == 1)
    {
        return "Hamming Number";
    }
    // Check if the number is divisible by 2
    if ($x % 2 == 0)
    {
        // If so, recursively call the function with the number divided by 2
        return is_hamming_numbers($x / 2);
    }
    // Check if the number is divisible by 3
    if ($x % 3 == 0)
    {
        // If so, recursively call the function with the number divided by 3
        return is_hamming_numbers($x / 3);
    }
    // Check if the number is divisible by 5
    if ($x % 5 == 0)
    {
        // If so, recursively call the function with the number divided by 5
        return is_hamming_numbers($x / 5);
    }
    // If none of the above conditions are met, the number is not a Hamming number
    return "Not a Hamming Number";
}

// Function to generate the Hamming numbers sequence up to a given number
function hamming_numbers_sequence($x)
{
    // Check if the number is 1, which is always a Hamming number
    if ($x == 1)
    {
        return "Hamming Number";
    }
    // Recursively call the function with the previous number
    hamming_numbers_sequence($x - 1);
    // Check if the current number is a Hamming number
    if (is_hamming_numbers($x) == "Hamming Number")
    {
        // If so, print the number followed by a comma
        echo($x) . ",";
    }
}

// Test the is_hamming_numbers function with different inputs and print the results
print_r(is_hamming_numbers(7) . "\n");
print_r(is_hamming_numbers(1) . "\n");

// Generate the Hamming numbers sequence up to 24
hamming_numbers_sequence(24);
?>
