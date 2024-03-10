<?php
/*
For space complexity, we only control what is inside our code,
we don't control what our input looks like.
*/
function booooo($n) {
    for($i = 0; $i < sizeof($n); $i++) {
        echo ('boooooo!');
    }
}
booooo([1,2,3,4,5]); //O(1)
?>

<?php
/*
What is the space complexity?
data structure: O(n)
*/
function arrayOfHiNTimes($n){
    $hiArray = [];
    for($i = 0; $i < $n;$i++){
        $hiArray[$i] = 'hi';
    }
    return $hiArray;
}

arrayOfHiNTimes(6);
?>