<?php
//Different terms for inputs:
//boxes and boxes2 are two different sets of boxes

function compressBoxesTwice($boxes, $boxes2){
    foreach ($boxes as $box) {
        echo $box."\n";
    }
    foreach ($boxes2 as $box) {
        echo $box."\n";
    }
}

/*
boxes and boxes2 are two different terms.
For example, boxes can be 100 boxes while
boxes2 can be only 1 box.
It should be O(a + b)
*/
?>