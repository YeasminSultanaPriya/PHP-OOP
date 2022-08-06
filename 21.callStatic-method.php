<?php

class student{
    private static function hello(){
        echo "This is a static function";
    }
    /* public static function __callStatic($method, $args){
        echo "This is a private or non existing method: $method";
    } */
    public static function __callStatic($method, $args){
                        //object,method
        if(method_exists(__class__,$method)){
            call_user_func_array([__class__,$method],$args); //__CLASS__ php keyword is simply a token for the current class
        }else{
            echo "Method does not exists: $method";
        }
    }


}
//student::hello(); // can access private method using callStatic
student::hi(); // non existing method 