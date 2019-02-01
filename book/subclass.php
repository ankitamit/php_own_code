<?php

class ankit {

 private $a;

 public function __construct($a) {
   $this->a = $a;
 }

 final public function getValueOfA() {

    return $this->a;
}

 

}

class newclass extends ankit {

  public function  __construct($a) {
    parent::__construct($a);
  }

 public function getvalueOfA() {

  echo ' value of a is '.$this->getValueOfA();
}


}


$new  = new newclass("ankit");

$new->getvalueOfA();



