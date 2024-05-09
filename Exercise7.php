<?php
// Function to find triplets in an array whose sum equals a given target
function three_Sum($arr, $target)
{
    // Calculate the number of elements in the array minus 2
    $count = count($arr) - 2;
    // Initialize an empty array to store the result
    $result=[];
    // Iterate through the array
    for ($x = 0; $x < $count; $x++) {
        // Check if the sum of the current element and the next two elements equals the target
        if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == $target) {
            // If true, push the triplet to the result array
            array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $target");
        }
    }
    // Return the array of triplets whose sum equals the target
    return $result;
}

// Define an array of numbers
$my_array = array(2, 7, 7, 1, 8, 2, 7, 8, 7);

// Test the three_Sum function with the defined array and different target values, and print the result
print_r(three_Sum($my_array, 16));
print_r(three_Sum($my_array, 11));
print_r(three_Sum($my_array, 12));
?>