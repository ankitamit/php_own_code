<?php

class StaticExample {

static public $aNum = 4;

const AVAILABLE = 1;

public $letsAvail = 5;

static public function sayHello() {

    self::$aNum = self::$aNum-1;
    print "hello";

}

public function availability() {
echo ' value of avail is '.self::AVAILABLE;
echo' ** lset avali is ** '.$letsAvail;
}

}



print StaticExample::$aNum;
StaticExample::sayHello();
print StaticExample::$aNum;
$staticExample = new StaticExample();

$staticExample->availability();
 
