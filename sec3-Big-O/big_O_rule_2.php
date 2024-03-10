<?php
//Rule 2: Remove Constants


//Question 1:
function print_first_item_then_first_half_then_say_Hi_100_times($items){
    echo ($items[0]);
    $middleIndex = floor(sizeof($items) / 2);
    $index = 0;

    while($index < $middleIndex) {
        echo ($items[$index]);
        $index++;
    }

    for($i = 0; $i < 100; $i ++ ){
        echo "hi";
    }
}

//O(1 + n/2 + 100) ->(Drop the constants) O(n)


//Question 2:
function compressBoxesTwice($boxes){
    foreach ($boxes as $box) {
        echo $box."\n";
    }
    foreach ($boxes as $box) {
        echo $box."\n";
    }
}
/*
The final time complexity becomes O(2*n);
But after we drop the constants, it becomes O(n).
So final answer is O(n)
*/

/*
With the big O, we do not really care about how steep
the line is.
*/
?>