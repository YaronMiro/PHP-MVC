<?php

namespace Http\Requests\Main;

class Test {

    public function __construct($name){
        $this->name = $name; 
    }

    public function __toString() {
        return $this->name . ' From class: ' . __CLASS__;
    }
}