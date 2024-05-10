<?php
// Function to find the element with odd occurrences in an array
function odd_occurrence($arr)
{
    // Initialize result variable to store the odd occurrence
    $result = 0;

    // Traverse the array
    foreach ($arr as &$value)
    {
        // Perform bitwise XOR operation
        // Bits that are set in $a or $b but not both are set.
        $result = $result ^ $value;
    }

    // Return the element with odd occurrences
    return $result;
}

// Test array
$num1 = array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4);

// Print the element with odd occurrences
print_r(odd_occurrence($num1) . "\n");
?>
