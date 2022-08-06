<?php

// if someone wants to print derived class data and skip main class data
//late static bindings work by storing the class named in the last "non-forwarding call".

class base{
    protected static $name = "YS";
    public function show(){
        echo static::$name; // print derived class data
        echo self::$name; //print base class data
    }
}

class derived extends base{
    protected static $name = "Priya";
}

$obj = new derived();
$obj->show();

?>