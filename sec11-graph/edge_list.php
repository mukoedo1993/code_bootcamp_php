<?php
//Edge List:
$graph = array(0 => 2, 2 => 3, 2 => 1, 1 => 3);


//Adjacent List:
//index of vertexs is the index of graph2
$graph2 = [[2], [2, 3], [0, 1, 3], [1, 2]];


//Adjacent Matrix:
$graph3 = [[0, 0, 1, 0],
[0, 0, 1, 1],
[1, 1, 0, 1],
[0, 1, 1, 0]];