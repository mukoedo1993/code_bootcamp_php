<?php
//Log all pairs of array

//PHP const
define("boxes" , ['a', 'b', 'c', 'd', 'e'], false);
echo boxes[0];


function logAllPairsOfArray($array){
 for($i = 0; $i < sizeof($array); $i++){
    for($j= 0; $j < sizeof($array); $j++){
        echo $i." ".$j."\n";
    }
 }
}
logAllPairsOfArray(boxes);
/*
Time complexity analysis:
This will become O(n) * O(n).
= O(n ^ 2)
Because we have the same term.
*/
?>