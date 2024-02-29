
<?php
$nemo = array('nemo');

function findNemo($array){
    for($i = 0; $i < sizeof($array); $i++){
        if($array[$i] =="nemo"){
            echo "Found NEMO!";
        }
    }
}
findNemo($nemo);
?>