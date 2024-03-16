<?php
//helper function:
//reference:
//https://stackoverflow.com/questions/10333098/utf-8-safe-equivalent-of-javascripts-charcodeat-in-php
function utf8_char_code_at($str, $index)
{
    $char = mb_substr($str, $index, 1, 'UTF-8');

    if (mb_check_encoding($char, 'UTF-8')) {
        $ret = mb_convert_encoding($char, 'UTF-32BE', 'UTF-8');
        return hexdec(bin2hex($ret));
    } else {
        return null;
    }
}


class HashTable{
    public $data;
    function __construct($size){
        $this->data = new SplFixedArray($size); //To simulate a C-style array here.
    }

    function _hash($key) {
        $hash = 0;
        /*
        We are just looping thru the key, so we do not think it as
        O(n), but just O(1).
        */
        for($i = 0; $i < strlen($key); $i++){
            $hash = ($hash + $i * utf8_char_code_at($key, $i)) %
        sizeof($this->data);
        echo $hash." \n";
        }
        return $hash;
    }

    /*
    
    */
    function set($key, $value){
        $address = $this->_hash($key);
        if($this->data[$address] == null){
            echo "\nLine 36!!\n";
            $this->data[$address] = [];
            $temp = [];
            $temp[$key] = $value;
            $this->data[$address] = $temp;
            print_r( $this->data);
        } else {
            $temp = $this->data[$address];
            $temp[$key] = $value;
            $this->data[$address] = $temp;
            print_r( $this->data);
            
        }
        return $this->data;

    }
 

    /*
    O(1):bucket size is small.
    */
    function get($key){
        $address = $this->_hash($key);
        $currentBucket = $this->data[$address];
        print_r($currentBucket);
        if(sizeof($currentBucket)>0){
            foreach ($currentBucket as $key1 => $value1){
                if($key1 == $key){
                    return $value1;
                }
            }
        }else{
            return null;
        }
    }

};

$myHashTable = new HashTable(50);
($myHashTable->_hash('grapes'));
$myHashTable->set('grapes', 10000);
$myHashTable->set('apples', 54);
echo "\nLine 75".$myHashTable->get('grapes');
