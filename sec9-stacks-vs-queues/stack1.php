<?php
//In PHP, there is no native linked list, so we
//use array.

class Stack {
    protected $stack;
    protected $limit;

    public function __construct($limit = 10, $initial = array() ) {
        //Initialize the stack
        $this->stack = $initial;
        $this->limit = $limit;
    }

    public function push($item) {
        // trap for stack overflow
        if (count($this->stack) < $this->limit) {
            //prepend item to the start of the array
            array_unshift($this->stack, $item);
        }
        else {
            throw new RunTimeException("Stack is alreay full");
        }
    }

    public function pop() {
        if($this->isEmpty()) {
            //trap for stack underflow
            throw new RunTimeException('Stack is empty!');
        }
        else {
            // pop item from the start of the array.
            return array_shift($this->stack);
        }
    }
    public function top(){
        return current($this->stack);
    }

    public function isEmpty(){
        return empty($this->stack);
    }
}

$stack = new Stack();
$stack->push("Google");
$stack->push("Udemy");
$stack->push("Discord");
echo $stack->top()." \n";
print_r($stack);
$stack->pop();
$stack->pop();
print_r($stack);