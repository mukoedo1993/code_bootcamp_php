<?php
//Create a function that reverses a string:
//'Hi My Name is Andrei' should be:
//'ierdnA si eman iH"
function reverse($str){
    //check input
    if(gettype($str) != "string"){
        throw new Exception("The type is not string");
    }
    $arr = str_split($str);
    //backwards
    $new_str = "";
    $length = sizeof($arr);
    for($i = $length; $i >0 ; $i--){
        $new_str = $new_str.($arr[$i - 1]);
    }
   
    return $new_str;
}

function reverse2($str){
    return strrev($str);
}

function reverse3($str){
    return implode("",array_reverse(str_split($str)));
}

//Test cases:
echo reverse("Hi My Name is Andrei");

echo "\n";
try{
    reverse(12);
}catch(Exception $e){
    echo 'Caught exeception: ', $e->getMessage(), "\n";
}
try{
    reverse(null);
}catch(Exception $e){
    echo 'Caught exeception: ', $e->getMessage(), "\n";
}

echo reverse2("Hi My Name is Andrei")."\n";

echo reverse3("Hi My Name is Andrei")."\n";