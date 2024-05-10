<?php
function findSingleElement($arr) {
    $ones = 0;
    $twos = 0;
    $common_bit_mask;
    foreach ($arr as $val) {
        $twos |= ($ones & $val);
        $ones ^= $val;
        $common_bit_mask = ~( $ones & $twos );
        $ones &= $common_bit_mask;
        $twos &= $common_bit_mask;
    }
    return $ones;
}

$arr = array(5, 3, 4, 3, 5, 5, 3);
echo "Input array: \n";
print_r($arr);
echo "Single Number: " . findSingleElement($arr) . "\n";
?>
