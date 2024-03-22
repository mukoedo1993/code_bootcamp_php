<?php
//ref: https://gist.github.com/meetrajesh/4570999

class BinarySearchTree {
    private $_root;
    public function _construct() {
        //setup sentinal node
        $this->_root = new BinarySearchNode(null);
    }

    public function getRoot() {
        return $this->hasNode() ? $this->_root->right : null;
    }
}