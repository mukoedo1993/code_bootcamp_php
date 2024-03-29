<?php
//Similar problems to its nodejs equivalence:
$basket = [2, 65, 34, 2, 1, 7, 8];
asort($basket);
print_r($basket);

//need to give th numeric flag:
$basket1 = [2, 65, 34, 2, 1, 7, 8];
asort($basket1, SORT_NUMERIC);
print_r($basket1);