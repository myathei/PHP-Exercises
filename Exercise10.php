<?php
// Function to find the single number in an array using bitwise XOR operation
function single_number($arr)
{
    // Initialize the result variable
    $result = 0;

    // Iterate through the array
    for ($i = 0; $i < sizeof($arr); $i++)
    {
        // Use bitwise XOR operation to find the single number
        $result = $result ^ $arr[$i];
    }

    // Return the single number found
    return $result;
}

// Define an array of numbers
$num = array(5, 3, 0, 3, 0, 5, 7, 7, 9);

// Print the single number found in the array
print_r(single_number($num) . "\n");
?>