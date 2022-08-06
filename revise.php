<?php


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
$test->data(course);



?>