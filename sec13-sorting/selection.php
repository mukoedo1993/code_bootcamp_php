<?php
//https://www.geeksforgeeks.org/php-program-for-selection-sort/
$numbers = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0];

function selectionSort(&$array) {
 $length = sizeof($array);

 for($i = 0; $i < $length; $i++) {
    $low = $i;
    for ($j = $i + 1; $j < $length; $j++){
        if ($array[$j] < $array[$low]){
            $low = $j;
        }
    }
    if($array[$i] > $array[$low]){
        //$temp = $array[$i];
        //$array[$i] = $array[$low];
        //$array[$low] = $temp;
        list($array[$i], $array[$low]) = [$array[$low], $array[$i]];
    }
 }



}

selectionSort($numbers);
print_r($numbers);