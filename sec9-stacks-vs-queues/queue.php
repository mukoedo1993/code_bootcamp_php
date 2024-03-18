<?php
class Queue {

    //reference: https://medium.com/@miladev95/queue-in-php-6255ac777cdb
    //It is a bad idea to implement queue based on array though.
    private $queue;

    public function __construct() {
        $this->queue = [];
    }

    public function enqueue($item) {
        array_push($this->queue, $item);
    }

    public function dequeue() {
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        }
        return null; // or throw an exception for an empty queue
    }

    public function peek() {
        if (!$this->isEmpty()) {
            return $this->queue[0];
        }
        return null; // or throw an exception for an empty queue
    }

    public function isEmpty() {
        return empty($this->queue);
    }
}
$myQueue = new Queue();
$myQueue->enqueue('Joy');
$myQueue->enqueue('Matt');
$myQueue->enqueue('Pavel');
$myQueue->enqueue('Samir');
echo $myQueue->peek();
$myQueue->dequeue();
print_r($myQueue);

