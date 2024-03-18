<?php
$myQueue = new SplQueue();
$myQueue->enqueue('Joy');
$myQueue->enqueue('Matt');
$myQueue->enqueue('Pavel');
$myQueue->enqueue('Samir');
echo $myQueue->bottom()." \n";//work as peek here.
$myQueue->dequeue();
print_r($myQueue);