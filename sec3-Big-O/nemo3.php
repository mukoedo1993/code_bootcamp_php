<?php
function compressAllBoxes($boxes){
    for($i = 0; $i < sizeof($boxes); $i++){
        echo $boxes[$i];
    }
}

$boxes = [0, 1, 2, 3, 4, 5];
function logFirstTwoBoxes($boxes){
    echo $boxes[0]."\n"; //O(1)
    echo $boxes[1]; //O(1)
}
logFirstTwoBoxes($boxes);
?>