<?php

// The __toString method in PHP is one that allows us to call an object and see its components as a string.


class abc{
    public function __toString(){
        return "Can't print object as a string of class: ". get_class($this); //get_class prints class name
    }


}

$test = new abc();
echo $test;