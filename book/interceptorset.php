<?php

class Person {


// private $myname;
 //private $myage;

 public function __set(string $key, string $value) {


   $methodName = "set".$key;

   if(method_exists($this,$methodName)) 
      $this->$methodName($value);

}

 public function __get(string $key) {
  return $this->$key;

}

 public function setname(string $name) {
 
     $this->myname = $name;
 
     if ($name != NULL)
      $this->myname = strtoupper($this->myname);

 } 

 public function setage(int $age) {
    $this->myage =   $age; 
 }
 


}

$p = new Person();
$p->name = "bob";
$p->age = '12';

echo ' ** age is '.$p->myage."\n\n";
echo ' ** name is '.$p->myname."\n\n";

