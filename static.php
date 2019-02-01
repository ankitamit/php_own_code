<?php

class staticClass  {


 static public $a = 0;

  public  function addStatic() {
     self::$a = self::$a + 1;

}

}

$staticObj = new staticClass();

$staticObj->addStatic();

echo ' ** value of a is ** '.staticClass::$a;




