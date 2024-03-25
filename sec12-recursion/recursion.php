<?php
$counter = 0;
function inception(){
    //variable scope:
    //https://www.php.net/manual/en/language.variables.scope.php
    global $counter;
    if ($counter > 3){
        return 'done';
    }
    $counter++;
    echo $counter;
    inception();
}

echo inception();