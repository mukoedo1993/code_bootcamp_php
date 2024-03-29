<?php
//ref: https://www.geeksforgeeks.org/php-program-for-bubble-sort/
$numbers = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0];


//Time complexity: O(n^2); Space Complexity: O(1)
function bubbleSort(&$array) {
    $length = sizeof($array);
    for ($i = 0; $i < $length - 1; $i++){
        for($j = 0; $j < $length - $i - 1; $j++){
            if($array[$j] > $array[$j+1]) {
                //Swap the numbers 
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}

bubbleSort($numbers);
print_r($numbers);