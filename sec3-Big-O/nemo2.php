
<?php
#Judge its performance now.
$nemo = array('nemo');

$everyone = array('dory', 'bruce', 'marlin', 'nemo','gill', 'bloat', 'nigel', 'squirt', 'darla', 'hank');


//test case:
$large = array_fill(0, 1000000, 'nemo');

function findNemo($array){
    //https://stackoverflow.com/a/6245978
   
    for($i = 0; $i < sizeof($array); $i++){
        if($array[$i] =="nemo"){
            echo "Found NEMO!\n";
        }
    }
   
}

//findNemo($nemo);
findNemo($large); //O(n) -> It takes linear time.
function compressAllBoxes($boxes){
    for($i = 0; $i < sizeof($boxes); $i++){
        echo $boxes[$i];
    }
}
?>