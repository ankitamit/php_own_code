<?php

class Person
{
     private $myname;
     private $myage;
   
     public $name_new; 
   public function __set(string $property, string $value)
    {

        $methodName = "set_$property";
        if (method_exists($this, $methodName)) {
          $this->$methodName($value); 
    }
    }

    public function __get($key) { 

       return $this->myname;
 }

  public function __unset(string $property)
    {

  echo ' **unsetting here **'.$property."\n\n";
        $method = "set_$property";
        if (method_exists($this, $method)) {
            $this->$method(null);
        }
   }

  
   public function set_name($value)  {
    $this->myname = $value;
}

}

$person = new Person();
$person->name = 'ankit';
$person->name_new = 'lddd';

unset($person->name);
unset($person->name_new);

echo ' **namee is **'.$person->name."\n\n";
