<?php
// Function to find triplets whose sum equals zero
function three_Sum_zero($arr)
{
    // Calculate the number of elements in the array minus 2
    $count = count($arr) - 2;
    // Initialize an empty array to store the result
    $result=[];
    // Iterate through the array
    for ($x = 0; $x < $count; $x++) 
    {
        // Check if the sum of the current element and the next two elements equals zero
        if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == 0)
        {
            // If true, push the triplet to the result array
            array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = 0");
        }
    }
    // Return the array of triplets whose sum equals zero
    return $result;
}

// Define two arrays of numbers
$nums1= array(-1,0,1,2,-1,-4);
$nums2 = array(-25,-10,-7,-3,2,4,8,10);

// Test the three_Sum_zero function with the defined arrays and print the result
print_r(three_Sum_zero($nums1));
print_r(three_Sum_zero($nums2));
?>