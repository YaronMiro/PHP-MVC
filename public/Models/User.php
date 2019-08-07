<?php

namespace Models;

class User {

    public function __construct($name){
        $this->name = $name; 
    }

    public function __toString() {
        return $this->name . ' From class: ' . __CLASS__;
    }
}