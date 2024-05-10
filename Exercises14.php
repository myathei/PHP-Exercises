<?php
// Function to check if an array forms an arithmetic sequence
function is_arithmetic($arr)
{
    // Calculate the common difference of the sequence
    $delta = $arr[1] - $arr[0];
    
    // Iterate through the array elements
    for ($index = 0; $index < sizeof($arr) - 1; $index++)
    {
        // Check if the difference between consecutive elements is not equal to the common difference
        if (($arr[$index + 1] - $arr[$index]) != $delta)
        {
            // If not, return "Not an arithmetic sequence"
            return "Not an arithmetic sequence";
        }
    }
    
    // If all differences are equal to the common difference, return "An arithmetic sequence"
    return "An arithmetic sequence";
}

// Define two arrays
$my_arr1 = array(6, 7, 9, 11);
$my_arr2 = array(5, 7, 9, 11);

// Test the is_arithmetic function with the defined arrays and print the results
print_r(is_arithmetic($my_arr1) . "\n");
print_r(is_arithmetic($my_arr2) . "\n");
?>
