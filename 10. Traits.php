<?php

// reuse sets of methods freely in several independent classes living in different class hierarchies

trait hello{
    public function sayhello(){
        echo "Hello everyone! ";
    }
    public function sayhi(){
        echo "Hi everyone! ";
    }
}

trait bye{
    public function saybye(){
        echo "Bye Bye everyone! ";
    }
}
class base{
    use hello, bye; // use 2 traits in one class

}
class base2{
    use hello;

}
class base3{
    use bye;

}
$test = new base();
$test2 = new base2();
$test3 = new base3();

$test->sayhello();
$test2->sayhi();
$test3->saybye();

?>
