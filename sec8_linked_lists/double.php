<?php
$double = new SplDoublyLinkedList(10);

$double->add(0,5);
$double->add(0,16);
$double->add(0,1);

//ref:https://stackoverflow.com/a/48215275
function printList($double){
echo "\nstart running: \n";
$prev = null;
$double->rewind();
while ($double->valid()) {
  
    $current = $double->current();
    echo 'PREV: ', $prev, PHP_EOL;
    echo 'CURRENT: ', $current, PHP_EOL;
    $prev = $current;
    $double->next();
    $next = $double->current();
    echo 'NEXT: ', $next, PHP_EOL;
    echo PHP_EOL;
}
}
printList($double);
$double->add(1,99);
printList($double);
$double->offsetUnset(2);
printList($double);