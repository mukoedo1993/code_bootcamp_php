<?php
// What is the Big O of the below function? 
//(Hint, you may want to go line by line)
function anotherFunChallenge($input) {
    $a = 5; // O(1)
    $b = 10; // O(1)
    $c = 50; // O(1)
    for ($i = 0; $i < $input; $i++) { // O(n)
      $x = $i + 1; // O(n)
      $y = $i + 2; // O(n)
      $z = $i + 3; // O(n)

    }
    for ($j = 0; $j < $input; $j++) { // O(n)
      $p = $j * 2; // O(n)
      $q = $j * 2; // O(n) 
    }
    $whoAmI = "I don't know"; // O(1)
  }
  // Big O = 4 + 7n = O(n)