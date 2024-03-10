<?php 
//Rule 1: Consider the worst case.
$nemo = ['nemo'];
$everyone = ['dory', 'bruce', 'marlin',
'nemo', 'gill', 'bloat', 'nigel', 'squirt',
'darla', 'hank'];

$large = array_fill(0, 1000000, 'nemo');

function findNemo($array){
    for($i = 0; $i < sizeof($array); $i++ ) {
        echo "running\n";
        if($array[$i] == 'nemo'){
            echo "Found NEMO!\n";
        }
    }
}

#A more efficient variant of findNemo

function findNemo1($array){
    for($i = 0; $i < sizeof($array); $i++ ) {
        echo "running\n";
        if($array[$i] == 'nemo'){
            echo "Found NEMO!\n";
            break;
        }
    }
}
findNemo($everyone);

echo "\nNow running more efficient variant:\n";

findNemo1($everyone);
/*
Note: What is the worst case here?
The worst case is that Nemo, instead of being 
the fourth item, is at the very end.
Even if we have the if statement, we will still have
the O(n) time.(linear time).
*/
?>
