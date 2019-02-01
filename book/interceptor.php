<?php

class Person {


  public $age = "1111";


 public function __get(string $property) {

   echo "\n\n".' get is ';
   $method = "get$property";
   
  if(method_exists($this, $method)) {
    return $this->$method();
}
}


 public function __isset($property) {

 echo "\n\n"."checking isset here "."\n\n".'propery is '.$property."\n\n";

  $method = "get_1_$property";
 return method_exists($this, $method);
}

 public function get_1_Name() {
  
}
 public function getName() :string {
   return "ankit";
}

 public function getage() :int {
   return $this->age;
}


}


$person = new Person();


if(isset($person->Name)) { 

echo ' ** inside persion here **'."\n\n";
echo 'name is '.$person->Name;

}

/*
if(isset($person->age))
echo 'age is '.$person->age;
*/




