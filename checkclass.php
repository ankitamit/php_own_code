<?php

class setData {

   private $a;
   private $b;


   function setDatanew(int $a, int $b) {

   $this->b = $b;
}

  function getData() {

  echo ' value of b is '.$this->b."\n\n";

}
  

}

$setData = new setData;

$setData->setDatanew(12,13);
$setData->getData();

