<?php
$strings = array('a','b','c','d');
//echo $strings."\n"; #ugly

//4*4
// 16 bytes of storage
// four items, each item takes four shelves.
//
echo $strings[2]."\n";  //O(1)

//push
echo "\nAfter pushing:\n";
array_push($strings, "e");  //O(1) add at the end of the array
print_r($strings);


//pop
array_pop($strings);
echo "\nAfter popping:\n";  //O(1)
print_r($strings);

//unshift
echo "\nAfter unshifting:\n";
array_unshift($strings, 'x');   //O(n)
print_r($strings);

//shift
echo "\nAfter shifting\n";
array_shift($strings);
print_r($strings);

//splice
echo "\nAfter splicing\n";
array_splice($strings,2,0,['alien']);   //O(n/2) => O(n)
print_r($strings);
