<?php

namespace php;

class newTest {


 public $firstArray;
 public $secondArray;

 public function __construct(array $a,array $b) {
   $this->a = $a;
   $this->b = $b;
}




 public function combineArray() {
  return $this->array_combine($this->a,$this->b);
}

 public function array_combine($a,$b) {


  return "helllo ankit here ";
}

}
 

$classTest = new newTest(array(1,2),array(3,4));

$combineArray = $classTest->combineArray();

echo ' ** array combine is **'."\n\n";
print_r($combineArray);
die;

