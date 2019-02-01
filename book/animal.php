<?php

class Animal {

  protected static $name = 'Animal';
  
  public static function  getName() {

    $class = get_called_class();
   return $class::$name;
}
}

class Cat extends Animal {

   protected static $name = 'Cat';
}

echo Animal::getName();
echo Cat::getName()."\n\n";

