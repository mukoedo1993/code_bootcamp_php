<?php
class Graph {
    public $numberOfNodes;
    public $adjacentList;

    function __construct(){
        $this->numberOfNodes = 0;
        $this->adjacentList =  [];
    }
    function addVertex($node){
        $this->adjacentList[$node] = [];
    }
    function addEdge($node1, $node2){
        if(!array_key_exists($node1, $this->adjacentList)){
            $this->adjacentList[$node1] = [];
        }
        if(!array_key_exists($node2, $this->adjacentList)){
            $this->adjacentList[$node2] = [];
        }
        if(false == array_search( $node2, $this->adjacentList[$node1])){
            array_push( $this->adjacentList[$node1], $node2);
        }
        if(false == array_search($node1, $this->adjacentList[$node2])){
            array_push( $this->adjacentList[$node2], $node1);
        }
    }

    function showConnections() {
        $allNodes = array_keys($this->adjacentList);
       foreach ($allNodes as $node ){
        $nodeConnections = $this->adjacentList[$node];
        $connections = "";
        foreach( $nodeConnections as $vertex){
            $connections = $connections.$vertex." ";
            
        }
        echo ($node."-->".$connections."\n");
       }
        
      }
}

$myGraph = new Graph();
$myGraph->addVertex("0");
$myGraph->addVertex("1");
$myGraph->addVertex("2");
$myGraph->addVertex("3");
$myGraph->addVertex("4");
$myGraph->addVertex("5");
$myGraph->addVertex("6");
$myGraph->addEdge("3", "1");
$myGraph->addEdge("3", "4");
$myGraph->addEdge("4", "2");
$myGraph->addEdge("4", "5");
$myGraph->addEdge("1", "2");
$myGraph->addEdge("1", "0");
$myGraph->addEdge("0", "2");
$myGraph->addEdge("6", "5");
$myGraph->showConnections();


