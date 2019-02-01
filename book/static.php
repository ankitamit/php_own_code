<?php

class staticClass {

 const AVAILABLE = 500;
 public  static $a=5;

 public $b = 1;
 public function sayhello() {

   self::$a++;
   self::$a++;
   self::$b++;
}

  public static function sayhelloagain() {

     self::$a++;
     
    $this->b = 10;
    self::sayhello();
  }

}

staticClass::sayhello();

echo ' ** value of a is now **'.staticClass::$a;
die;
echo ' ** value of a is  ****  '.staticClass::$a;

 $aobj = new staticClass();

echo  $aobj->sayhelloagain(). ' and new value of a is '.staticClass::$a;


