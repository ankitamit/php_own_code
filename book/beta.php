<?php
class alpha {

    function classname(){
        return __CLASS__;
    }

    function selfname(){
        return self::classname();
    }

    static  function staticname(){
        return static::classname();
    }
}

class beta extends alpha {

    function classname() {
     return __CLASS__;
}

}

$beta = new beta();

echo ' class name is '.beta::staticname()."\n\n";

