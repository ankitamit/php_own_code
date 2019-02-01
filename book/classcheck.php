<?php

class Person {

 public function __construct() {
 }


  public function __set($key, $value) {
     
    
     $method = "set_".$key;
   
     if (method_exists($this, $method))
         $this->$method($value);

}
  public function set_a($a) {
 //  $this->a = $a;

}
  public function getA() {

   return $this->a;
}

}

$person = new Person();
$person->a = 1222;
echo ' value  of a is '.$person->getA();
