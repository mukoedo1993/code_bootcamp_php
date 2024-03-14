<?php
//Merge two sorted arrays into one single array:


function mergeSortedArrays($array1, $array2){
    $mergedArray = array();
    $array1Item = $array1[0];
    if(gettype($array1) != "array"){
        throw new Exception("The type of lhs is not array");
    }
    if(gettype($array2) != "array"){
        throw new Exception("The type of rhs is not array");
    }
    $length1 = sizeof($array1);
    $length2 = sizeof($array2);

    if($length1 == 0){
        return $array2;
    }

    if($length2 == 0){
        return $array1;
    }

    $mergedArray = array();
    
    $array1Item = $array1[0];
    $array2Item = $array2[0];
    $i = $j = 0;
    while($i < $length1 && $j < $length2)
    {
            if($array1[$i] < $array2[$j]){
                array_push($mergedArray, $array1[$i]);
                $i++;
            }
            else {
                array_push($mergedArray, $array2[$j]);
                $j++;
            }
        }
      
    //deal with remaining elements:
    if($i < $length1){
        for(;$i<$length1;$i++){
            array_push($mergedArray,$array1[$i]);
        }
    }
   if($j < $length2){
    for(;$j < $length2;$j++){
        array_push($mergedArray,$array2[$j]);
    }
   }
   return $mergedArray;
}

  
$arr_ichi = [1,3,5,7,9];
$arr_ni = [-7,-3,2,4,6,8,10,13,15,17];
$new_arr = mergeSortedArrays($arr_ichi, $arr_ni);
print_r($new_arr);
$new_arr1 = mergeSortedArrays($arr_ichi, []);
print_r($new_arr1);
try{
mergeSortedArrays($arr_ichi, 32);
}catch(Exception $e){
    echo $e->getMessage();
}