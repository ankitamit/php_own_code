<?php

class a {
  function getXName() {
     return x::getClassName();
  }
  function getXStaticName() {
     return x::getStaticClassName();
  }

}

class b extends a {
}

class x {
  public function getClassName() {
    return get_called_class();
  }
  public static function getStaticClassName() {
    return get_called_class();
  }
  public function sum() {

    $getargs = func_get_args();
   
    $sum = 0;
    foreach($getargs as $value)
    $sum = $sum + $value;

  return $sum;
}


}

echo  '** x is sum **'.x::sum(1,2,3);
echo 'x is here  '.x::getClassName();
die;
$a = new a();

$b = new b();

echo $a->getXName(); // will return "a"
echo $b->getXName(); // will return "b"

echo $a->getXStaticName(); // will return "x"
echo $b->getXStaticName(); // will return "x"

?>
