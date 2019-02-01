<?php

trait PriceUtilities {


  public function calculateTax($price): float {
 
    return ($this->getTaxRate()*$price)/100;

}

  abstract public function getTaxRate(): float;

}

class PriceCalculate {
  use PriceUtilities {
    PriceUtilities::calculateTax as private;
}


  public function __construct($price) {
    $this->price = $price;
}

  public function getTaxRate() {
    return '10.2';
}

  public function calculateTotalPrice() {
   
   return $this->price + $this->calculateTax($this->price);

} 
}


 $object = new PriceCalculate(700);

 echo ' ** calculate Total Price is ** '.$object->calculateTotalPrice()."\n\n";
 
