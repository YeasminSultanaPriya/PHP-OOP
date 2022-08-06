<?php

// used to show massage if you are trying to access non existing or private property instead of showing an error
/* class abc{
    private $name;
    public function __get($property){
        echo "You are trying to access non existing or private property($property) ";
    }
}

$test = new abc();
$test->name; */

######### array #######

class abc{
    private $data = ["name" => "YS", "course"=>"CSE"];

    public function __get($key){
        if(array_key_exists($key, $this->data)){
            return $this->data($key);
        }
        else{
            return "This key($key) is not defined";
        }
    }
}

$test = new abc();
echo $test->course;