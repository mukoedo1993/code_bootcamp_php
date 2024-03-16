<?php
//Google Question
//Given an array = [2,5,1,2,3,5,1,2,4]:
//It should return 2

//Given an array = [2,1,1,2,3,5,1,2,4]:
//It should return 1

//Given an array = [2,3,4,5]
//It should return undefined

#worst one: (wrong one):
function firstRecurringCharacter($input){
    for ($i = 0; $i < sizeof($input); $i++) {
        for($j = $i + 1; $j < sizeof($input); $j++){
            if ($input[$i] == $input[$j]){
                return $input[$i];
            }
        }
    }
    return null;
}
//O(n^2)


function firstRecurringCharacter2($input){
    $map = array();
    for($i = 0; $i < sizeof($input);$i++){
        if($input[$i] != null && array_key_exists($input[$i],$map)) {
            return $input[$i];
        } else {
            $map[$input[$i]] = $i;
        }
    }
    return null;
}

echo firstRecurringCharacter2([2,5,1,2,3,5,1,2,4]);
echo firstRecurringCharacter2([2,5,5,1,2,3,5,1,2,4]);