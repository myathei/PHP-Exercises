<?php
// Function to check if an array forms a geometric sequence
function is_geometric($arr)
{
    // If the array has 1 or fewer elements, it's automatically considered a geometric sequence
    if (sizeof($arr) <= 1)
        return True;
    
    // Calculate the ratio between the second and first elements of the array
    $ratio = $arr[1] / $arr[0];
   
    // Check the ratio of the remaining elements
    for ($i = 1; $i < sizeof($arr); $i++)
    {
        // If the ratio of any pair of consecutive elements is not equal to the initial ratio, return "Not a geometric sequence"
        if (($arr[$i] / ($arr[$i - 1])) != $ratio)
        {
            return "Not a geometric sequence";
        }
    }        

    // If all ratios are equal, return "Geometric sequence"
    return "Geometric sequence";
}

// Define two arrays
$my_arr1 = array(2, 6, 18, 54);
$my_arr2 = array(10, 5, 2.5, 1.20);

// Test the is_geometric function with the defined arrays and print the results
print_r(is_geometric($my_arr1) . "\n");
print_r(is_geometric($my_arr2) . "\n");
?>
