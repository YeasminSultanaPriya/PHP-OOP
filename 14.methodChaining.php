<?php
//With the help of php method chaining we can call more than one method of a class in single instruction.

class abc{
    public function first(){
        echo "This is first function <br>";
        return $this;// return object to 2nd function
    }
    public function second(){
        echo "This is second function <br>";
        return $this;
    }
    public function third(){
        echo "This is third function <br>";
    }
}

$test = new abc();
$test->first()->second()->third();


?>