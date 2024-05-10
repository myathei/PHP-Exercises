<?php
// Function to calculate the length of the last word in a string
function length_of_last_word($s)
{
    // Check if the string is empty or contains only whitespace characters
    if (strlen(trim($s)) == 0)
    {
        return "Blank String";
    }

    // Split the string into words
    $words = explode(' ', $s);

    // If there are multiple words, return the length of the last word
    if (sizeof($words) > 1)
        return strlen(substr($s, strrpos($s, ' ') + 1));
    else
        return "Single word";
}

// Test cases
print_r(length_of_last_word("PHP Exercises") . "\n");
print_r(length_of_last_word("PHP") . "\n");
print_r(length_of_last_word("") . "\n");
print_r(length_of_last_word("  ") . "\n");
?>
