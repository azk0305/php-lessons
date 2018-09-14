<?php

require_once 'animal.php';
require_once 'thinkable.php';

class Human extends Animal {
    use Thinkable;
    
    private $hobby;
    
    function __construct($name, $age, $hobby) {
        parent::__construct($name, $age);
        $this->hobby = $hobby;
    }
}