<?php

class shopproductWriter {


 private $addProduct = [];

 public function addProduct(ShopProduct $shopProduct) {
   $this->addProduct[] = $shopProduct;
}



 public function write() {


}

}


