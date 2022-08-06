<?php

class abc{
    private $name;
    public function __get($property){
        echo "You are trying to access non existing or private property($property) ";
    }
    public function __set($property,$value){ // 2 arguments property and its value
        echo "You are trying to access non existing or private property: $property ";
    }
}


$test = new abc();
$test->name = "YS";