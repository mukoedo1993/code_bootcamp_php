<?php
$counter = 0;
function inception(){
    //variable scope in PHP:
    //https://www.php.net/manual/en/language.variables.scope.php
    global $counter;
    if ($counter > 3){
        return 'done';
    }
    $counter++;
    echo $counter." ";
    inception();
}

echo inception();

/*
Three rules:
1: Identify the base case
2: Identify the recursive case
3: Get closer and closer and return when needed.
Usually you have two returns.

*/