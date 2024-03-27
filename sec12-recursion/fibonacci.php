<?php
//Given a number N return the index value of the Fibonacci sequence, where 
//the sequence is: 

// 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144 ...
// the pattern of the sequence is that each value is the sum of 
//the previous 2 values, that means that for N=5 -> 2+3


function fibonacciIterative($n){    //O(n)
    //code here:
    if(gettype($n) != 'integer' || $n < 0)
    exit(-1);
    if($n == 0 ){
        return 0;
    }
    if($n == 1 ){
        return 1;
    }
   //starting from n = 2
   $offset_1 = 1;
   $offset_2 = 0;
   $result = 0;
   for($i = 2; $i <= $n; $i++){
    $result = $offset_1 + $offset_2;
    //new offset
    $offset_2 = $offset_1;
    $offset_1 = $result;
   }
    return $result;
    
}

function fibonacchiRecursive($n){   //time complexity: O(2^n) exponential time
    //code here:
    if(gettype($n) != 'integer' || $n < 0)
    exit(-1);
    if($n == 0 ){
        return 0;
    }
    if($n == 1 ){
        return 1;
    }
    return fibonacchiRecursive($n - 1) + fibonacchiRecursive($n - 2);
}

echo "Using iterative functions:\n";
for($i = 0; $i < 20;$i++){
    echo fibonacciIterative($i)." ";
}
echo "\n\n\n";
echo "Using recursive functions:\n";
for($i = 0; $i < 20;$i++){
    echo fibonacchiRecursive($i)." ";
}
echo "\n";
/*
Fibonacci is good for being readable,
but its time complexity is much higher.
*/
