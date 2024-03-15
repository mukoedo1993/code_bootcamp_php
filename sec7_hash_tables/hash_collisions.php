<?php
$user = array(
    "age"=> 54,
    "name" => 'Kylie',
    "magic" => true,
    "scream" => function(){
        echo "ahhhhh\n";
    }
);
$user["age"];//O(1)
$user["spell"] = 'abra kada';   //O(1)
$user["scream"]();  //O(1)