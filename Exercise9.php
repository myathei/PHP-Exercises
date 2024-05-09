<?php
// Function to find the single number in an array
function single_number($arr)
{
    // Initialize $result with the first element of the array
    $result = $arr[0];

    // Iterate through the array starting from the second element
    for ($i = 1; $i < sizeof($arr); $i++)
    {
        // Use bitwise XOR operation to find the single number
        $result = $result ^ $arr[$i];
    }
    
    // Return the single number found
    return $result;
}

// Define two arrays
$arr1 = array(5, 3, 4, 3, 4);
$arr2 = array(3, 2, 5, 2, 1, 5, 3);

// Print the first array
print_r($arr1);
// Print the single number found in the first array
print_r('Single Number: ' . single_number($arr1) . "\n");

// Print the second array
print_r($arr2);
// Print the single number found in the second array
print_r('Single Number: ' . single_number($arr2) . "\n");
?>