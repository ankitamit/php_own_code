<?php

declare(strict_types=1);


interface IdentityObject {
  public function generateId();
}

trait TaxTools
{
    function taxCalculate(float $price): float
    {
        return 222;
    }
}

trait PriceUtilities {

  private $taxrate = 17.567;

  public function taxCalculate(int $price): int {

  return (int)(($price*$this->taxrate)/100);
}
}

trait identity {


  public function generateId() : string {
  return "hello ankit bhatia";
}
}

class shopproduct implements IdentityObject {

  use identity, PriceUtilities, TaxTools {
   TaxTools::taxCalculate insteadof PriceUtilities;
   PriceUtilities::taxCalculate as basictax;
}

}

function getPrice(IdentityObject $obj) {


  echo 'get price is '.$obj->generateId()."\n\n";

}

$object = new shopproduct();
$id = getPrice($object)."\n\n";
$taxamount = $object->taxCalculate(1000);


echo ' taxamount is '.$taxamount."\n\n";

echo ' ** new calculation is **'.$object->basictax(3000)."\n\n";


