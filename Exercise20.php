<?php
// Function to check if two strings are anagrams
function is_anagram($a, $b)
{
    // Check if the character counts of both strings are equal
    if (count_chars($a, 1) == count_chars($b, 1))
    {
        // If equal, the strings are anagrams
        return "These two strings are anagrams";
    }
    else
    {
        // If not equal, the strings are not anagrams
        return "These two strings are not anagrams";
    }
}
// Test the is_anagram function with two pairs of strings and print the results
print_r(is_anagram('anagram', 'nagaram') . "\n");
print_r(is_anagram('cat', 'rat') . "\n");
?>
