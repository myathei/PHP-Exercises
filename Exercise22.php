<?php
// Function to move all zeroes to the end of an array while maintaining the order of non-zero elements
function move_zero($arr)
{
    // Initialize a counter to track the position where non-zero elements will be placed
    $count = 0;
    
    // Get the size of the array
    $n = sizeof($arr);
    
    // Iterate through the array
    for ($i = 0; $i < $n; $i++)
    {
        // If the current element is non-zero
        if ($arr[$i] != 0)
        {
            // Move the non-zero element to the position tracked by $count and increment $count
            $arr[$count++] = $arr[$i];
        }
    }
    
    // Fill the remaining positions in the array with zeroes
    while ($count < $n)
    {
        $arr[$count++] = 0;
    }
    
    // Return the modified array
    return $arr;
}

// Test arrays
$num_list1 = array(0, 2, 3, 4, 6, 7, 10);
$num_list2 = array(10, 0, 11, 12, 0, 14, 17);

// Test the move_zero function with the test arrays and print the results
print_r(move_zero($num_list1));
print_r(move_zero($num_list2));
?>
