<?php
// Function to find the majority element in an array
function majority_element($arr)
{
    // Initialize index and counter variables
    $idx = 0;
    $ctr = 1;

    // Iterate through the array starting from index 1
    for ($i = 1; $i < sizeof($arr); $i++)
    {
        // If the current element is the same as the element at the current index
        if ($arr[$idx] == $arr[$i])
        {
            // Increment the counter
            $ctr += 1;
        }
        else
        {
            // Decrement the counter
            $ctr -= 1;

            // If the counter becomes 0, update the index to the current index and reset the counter to 1
            if ($ctr == 0)
            {
                $idx = $i;
                $ctr = 1;
            }
        }
    }

    // Return the majority element found at the index
    return $arr[$idx];
}

// Test arrays
$num1 = array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6);
$num2 = array(1, 2, 3, 3, 3, 3, 2, 3, 5, 3, 1, 3, 3, 4, 6, 1, 3, 3, 4, 6, 6);

// Test the majority_element function with the test arrays and print the results
print_r(majority_element($num1) . "\n");
print_r(majority_element($num2) . "\n");
?>
