
<?php
#Judge its performance now.
$nemo = array('nemo');

$everyone = array('dory', 'bruce', 'marlin', 'nemo','gill', 'bloat', 'nigel', 'squirt', 'darla', 'hank');


//test case:
$large = array_fill(0, 1000000, 'nemo');

function findNemo($array){
    //https://stackoverflow.com/a/6245978
    $t0 = microtime(true);
    for($i = 0; $i < sizeof($array); $i++){
        if($array[$i] =="nemo"){
            echo "Found NEMO!\n";
        }
    }
    $t1 = microtime(true);
    $time_elapsed_secs = ($t1 - $t0)/1000;
    echo "Call to fine Nemo took ".$time_elapsed_secs.' miliseconds';
}

//findNemo($nemo);
findNemo($large);
?>