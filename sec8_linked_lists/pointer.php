<?php 
//Header files:
//class ListNode
include './Node.php';


//reference:
//https://stackoverflow.com/a/12954568
class LinkList
{
    private $firstNode;
    private $lastNode;
    private $length;

    //we start with an empty singly-linked list
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->length = 0;
    }

    public function insertFirst($data)
    {
        $link = new ListNode($data);
        $link->next = $this->firstNode;
        $link->firstNode = &$link;
        /*
        If this is the first node inserted in
        the list then set the lastNode pointer
        to it.
        */
        if($this->lastNode == NULL)
        {
            $this->lastNode = &$link;
           
        }

        //increase the length
        $this->length++;
    }

};

$linkList = new LinkList();