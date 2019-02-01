<?php

interface chargeable {
  public function getPrice();
}

class ShopProduct implements chargeable {

   public $price;
   public $discount;

 public function getPrice() {

    return $this->price - $this->discount;
}

  public function setPrice($price) {

    $this->price = $price;
}

  public function setDiscount($discount) { 
     $this->discount = $discount;
}

 public function getDiscount() {

   return $this->discount;
}

}

function chargeAble(chargeable $chargeable) {

  echo '** price is * '.$chargeable->getPrice();
  echo ' ** discount chargeable is ** '.$chargeable->getDiscount();
}

$newShop = new ShopProduct();
$newShop->setPrice('100');
$newShop->setDiscount('20');

chargeAble($newShop);






