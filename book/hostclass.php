<?php

trait PriceUtilities {

 private function calculateTax(float $price): float {

  return ($this->getTaxRate()/100)*$price;

}

 abstract function getTaxRate() :float;

}

trait newTrait {


public function calculateTax(float $price): float {

  return ($this->getTaxRate()/70)*$price;

}
}

class UtilityService {

   use PriceUtilities, newTrait {
     PriceUtilities::calculateTax  insteadof newTrait;
     newTrait::calculateTax as newCalculateTax;     
}

   public function getTaxRate() {
    return '100';
}

}

$utilityService = new UtilityService();
echo ' calculate tax is '.$utilityService->newCalculateTax(900);

