<?php

class Animal {
    private $name;
    private $age;
    
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    function say() {
        print $this->name . "です。" . $this->age . "歳です。" . PHP_EOL;
    }
}