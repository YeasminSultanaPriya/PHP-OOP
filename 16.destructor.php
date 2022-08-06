<?php

// A destructor is called when the object is exited. PHP will automatically call destructor function at the end of the script

/* class abc{

    public function __construct(){
        echo "This is construct function <br>";
}

 public function hello(){
        echo "Hello everyone <br>";
}

    public function __destruct(){
        echo "This is destruct method";
}

}

$test = new abc(); // destruct will print after creating the object
$test->hello(); */

//exmp: basically used for connect and close sql connecton

class abc{
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect();
}

    public function insert(){
        echo "Hello everyone <br>";
}
    public function update(){
        echo "Hello everyone <br>";
}

    public function __destruct(){
        mysqli_close($this->conn);
}

}

$test = new abc();
$test->insert();