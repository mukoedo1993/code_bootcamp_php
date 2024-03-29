<?php
//solution: https://replit.com/@aneagoie/reverseString
function reverseString($str){
    //type check first
    if(gettype($str) != "string"){
        throw new Exception("Not a string!");
    }
        $arr1 = str_split($str);
        $arr2 = [];
        while(false == empty($arr1)){
            $top = array_pop($arr1);
            array_push($arr2, $top);
        }
        $new_string = implode($arr2);
        return $new_string;
}

echo reverseString("yoyo master")."\n";

function reverseStringRecursive($str) {
    //type check first
    if(gettype($str) != "string"){
        throw new Exception("Not a string!");
    }
    //then, do check the length of string:
    if(strlen($str) == 0 || strlen($str) == 1){
        return $str;
    }
  
    return (reverseStringRecursive(substr($str, 1))).$str[0];
}
echo reverseStringRecursive("yoyo master");