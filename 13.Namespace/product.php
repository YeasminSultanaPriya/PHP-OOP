<?php

namespace pro_class;

class product{
    public function __construct(){
        //echo "This is product class";

        $obj1 = new \pro_class1\product; //must use backslash before namespace
    }
}