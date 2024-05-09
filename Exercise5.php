<?php
// Define a function named missing_number which takes an array $num_list as input
function missing_number($num_list)
{
    // Construct a new array containing the range from the first element to the maximum element in $num_list
    $new_arr = range($num_list[0], max($num_list));                                                    
    // Use array_diff to find the missing elements by comparing $new_arr with $num_list
    return array_diff($new_arr, $num_list);
}

// Test the missing_number function with different input arrays and print the result
print_r(missing_number(array(1,2,3,6,7,8)));
print_r(missing_number(array(10,11,12,14,15,16,17)));
?>