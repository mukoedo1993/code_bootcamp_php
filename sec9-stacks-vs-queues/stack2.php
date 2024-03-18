<?php
//Using SplStack class here.
//https://www.php.net/manual/en/class.splstack.php
//So, SqlStack is a child class fo SplDoublyLinkedList.
$stack = new SplStack();
$stack->push("Google");
$stack->push("Udemy");
$stack->push("Discord");
echo $stack->top()." \n";
print_r($stack);
$stack->pop();
$stack->pop();
print_r($stack);
