<?php
//Drop Non Dominants
function printAllNumbersThenAllPairSums($numbers){
    echo 'these are the numbers:';
    foreach($numbers as $number){
        echo $number;
    }
    echo ' and these are their sums:';
    foreach($numbers as $number1){
        foreach($numbers as $number2){
            echo ($number1 + $number2)."\n";
        }
    }
}

printAllNumbersThenAllPairSums([1, 2, 3, 4, 5], );

/*
first part: O(n)
second part: O(n*n)
Rule 4: Drop the non-determinant term.
O(n) here.
so O(n + n*n) = O(n ^ 2)
*/


/*
Another question:
O(x^2 + 3*x + 100 + x/2) -> O(x^2)

*/

/*
If you have three nested loops, 99% of
time it is a bad idea.
*/