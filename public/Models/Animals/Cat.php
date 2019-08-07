<?php

namespace Models\Animals;

class Cat {

    public function __construct($name){
        $this->name = $name; 
    }

    public function __toString() {
        return $this->name . ' From class: ' . __CLASS__;
    }
}