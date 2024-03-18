<?php
class ListNode{
    public $data;
    public $next;
    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

    function readNode()
    {
        return $this->data;
    }
}

class LinkList
{
    private $firstNode;
    private $lastNode;
    private $length;

    function __construct(){
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->length = 0;
    }

    //insertion at the start of singly linked list
    public function insertFirst($data)
    {
        $link = new ListNode($data);
        $link->next = $this->firstNode;
        $this->firstNode = &$link;
        /*
        If this is the first node inserted in the list
        then set the lastNode pointer to it.
        */
        if($this->lastNode == NULL)
            {$this->lastNode = &$link;}
        $this->length++;
        
    }

//displaying all nodes of linkList
public function readList()
{
        $listData = array();
        $current = $this->firstNode;
        while($current != NULL){
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        echo "readList function called: \n";
        foreach($listData as $v){
            echo $v." ";
        }
        echo "\n";
}

//reversing all nodes of linkList
public function reverseList()
{
    if($this->firstNode != NULL)
    {
        if($this->firstNode->next != NULL)
        {
            $current = $this->firstNode;
            $new = NULL;

            while($current != NULL)
            {
                $temp = $current->next;
                $current->next = $new;
                $new = $current;
                $current = $temp;
            }
            $this->firstNode = $new;
        }
    }
}

//deleting a node from linklist $key is the value
//you want to delete
public function deleteNode($key)
{
    $current = $this->firstNode;
    $previous = $this->firstNode;

    while($current->data != $key)
    {
        if($current->next == NULL){
            return NULL;
        }
        else
        {
            $previous = $current;
            $current = $current->next;
        }
    }

    if($current == $this->firstNode){
        if($this->length == 1)
        {
            $this->lastNode = $this->firstNode;
        }
        $this->firstNode = $this->firstNode->next;
    }
    else
    {
        if($this->lastNode == $current)
        {
                $this->lastNode = $previous;
        }
        $previous->next = $current->next;
    }
    $this->length--;
}

    //empty singly-linked-list
    public function emptyList()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->length = 0;
    }

    //insertion at index
    public function insert($NewItem,$key){
        if($key == 0){
            $this->insertFirst($newItem);
        }
        else{
            $link = new ListNode($NewItem);
            $current = $this->firstNode;
            $previous = $this->firstNode;

            for($i = 0; $i < $key; $i++){
                    $previous = $current;
                    $current = $current->next;
            }

            $previous->next = $link;
            $link->next = $current;
            $this->length++;
        }
    }

    public function insertLast($newItem){
        $key1 = $this->length; 
        $this->insert($newItem,$key1);
    }


}
$obj = new LinkList();
$value = 1;
$value1 = 2;
$key = 0;
$obj->insertFirst(100);
$obj->readList();
$obj->insertFirst(101);
$obj->readList();
$obj->insertFirst(102);
$obj->readList();
$obj->insertFirst(103);
$obj->readList();
$obj->insert(-17,3); // at any index
$obj->readList();
$obj->insert(104,2); 
$obj->readList();
$obj->insert(105,3); 
$obj->readList();
$obj->insertLast(23);
$obj->readList();
$obj->insert(106,4); 
$obj->readList();
$obj->deleteNode(-17);
$obj->readList();
$obj->reverseList();
$obj->readList();