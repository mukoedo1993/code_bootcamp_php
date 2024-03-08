<?php 
//What is the Big O of the below function?
//(Hint: you may want to go line by line)
function funChallenge($input) {
    $a = 10; //O(1)
    $a = 50 + 3;    //O(1)

    for ($i = 0; $i < sizeof($input); $i ++){
        anotherFunction();  //O(n)
        $stranger = true;   //O(n)
        $a++;   //O(n)
    }
    return $a; //O(1)
}


/*
Final answers:
3 + n + n + n + n = 4 * n + 3
*/