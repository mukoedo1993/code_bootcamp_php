<?php
function reverserString($str){
    //type check first
    if(gettype($str) != "string"){
        throw new Exception("Not a string!");
    }
}
reverseString("yoyo master");

function reverseStringRecursive($str) {
    //type check first
    if(gettype($str) != "string"){
        throw new Exception("Not a string!");
    }

}
reverseStringRecursive("yoyo master");