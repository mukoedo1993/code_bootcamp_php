<?php
class MyArray{
      public $data ;
     public $length;

     function __construct(){
        $this->data = array();
         $this->length = 0;
     }

    function get($index) {
        return $this->data[$index];
    }
    
    function push($item){
        
        array_push($this->data,  $item);
        $this->length++;
        return $this->length;
    }

    function pop(){
        $lastItem = $this->data[$this->length - 1];
        $item = array_pop($this->data);
        $this->length--;
        return $lastItem;
    }

    function delete($index){
        $item = $this->data[$index];
        $this->shiftItems($index);
        
        //There is no delete in PHP, so we use array_splice here.
        array_splice($this->data,-1,1);
        $this->length--;
    }

    function shiftItems($index){
        for($i = $index; $i < $this->length - 1; $i++){
            $this->data[$i] = $this->data[$i+1];

        }

    }
}

//Test:
$myArray = new MyArray();

$myArray->push(12);
print_r($myArray);
echo "\nLine 24\n";
print_r($myArray->get(0));
echo "\nLine 26\n";
$myArray->push(13);
print_r($myArray);
$myArray->push(14);
print_r($myArray);
$myArray->push(15);
print_r($myArray);
$myArray->push(16);
print_r($myArray);
$myArray->push(17);
print_r($myArray);
$myArray->push(-19);
print_r($myArray);

echo "\nLine 38: popped element: ".($myArray->pop())." \n";
print_r($myArray);
$myArray->delete(0);

print_r($myArray);
$myArray->delete(3);

print_r($myArray);
