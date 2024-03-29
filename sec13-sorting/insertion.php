<?php
//For small dataset or dataset nearly sorted, you want
//to use insertion sort over most of other sorting algorithms.
function insertionSort(&$arr) {
    $n = sizeof($arr);
    for ($i = 1; $i <  $n; $i++)
    {
        $key = $arr[$i];
        $j = $i - 1;
        // Move elements 
        //subarray [j .. i-1 ](0=< j <= i-1)
        //of arr[0 .. i-1]
        // that are greater than key, to one position ahead
        // of their current position
        while ($j >= 0 && $arr[$j] > $key)
        {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
}


$numbers = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0];
insertionSort($numbers);
print_r($numbers);