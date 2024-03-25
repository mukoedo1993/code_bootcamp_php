<?php
function findFactorialRecursive($number) {
    //code here
    if(gettype($number) != 'integer' || $number < 0)
    exit(-1);
    if($number == 0){
        return 1;
    }
    if($number == 1){
        return 1;
    }
    if($number > 1){
        return findFactorialRecursive($number - 1) * $number;
    }
    
    return $answer;
}
echo findFactorialRecursive(10)." \n";

function findFactorialIterative($number) {
    if(gettype($number) != 'integer')
    exit(-1);
    if($number == 0){
        return 1;
    }
    if($number == 1){
        return 1;
    }
    $result = 1;
    for($i = 1;$i <= $number;$i++) {
        $result = $result * $i;
    }
    return $result;
}
echo findFactorialIterative(10);