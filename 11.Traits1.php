<?php

// priority=> object created class>trait>base class

/* trait hello{
    public function sayhello(){
        echo "Hello from trait. <br>";
    }
}

class base{
    public function sayhello(){
        echo "Hello from base class. <br>";
    }
}

class child extends base{
    use hello;
    public function sayhello(){
        echo "Hello from child class <br>";
    }
}

$test = new child();
$test->sayhello(); */

########### use particular function from trait ########
/* trait hello{
    public function sayhello(){
        echo "Hello from hello trait. <br>";
    }
}

trait hi{
    public function sayhello(){
        echo "Hello from hi trait. <br>";
    }
}

class base{
    use hello, hi{
        hello::sayhello insteadOf hi;
        hi::sayhello as newhello; // rename function name
    }
}

$test = new base();
$test->sayhello();
$test->newhello(); */


######## change access modifier of method ############

trait hello{
    private function sayhello(){
        echo "Hello from hello trait. <br>";
    }
}
class base{
    use hello{
        hello::sayhello as public; // chnge access modifier
        hello::sayhello as public newhello ; // chnge name also
    } 
}
$test = new base();
$test->sayhello();
$test->newhello();

?>