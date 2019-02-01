<?php

abstract class ShopProductWriter {
	protected $products = array();
	public function addProduct( array $shopProduct ) {
		$this->products[]=$shopProduct;
	}
 	
        abstract protected function write();
 }


class XmlProductWriter extends ShopProductWriter {

   public function write() {

 echo ' * containing write method here 8* ';
}

}

class TextProductWriter extends ShopProductWriter {


   public function write() {
 
    foreach($this->products[0] as $value) 
       print_r("value is ".$value);

}

}

function writeObject(ShopProductWriter $shopProductWriter) {
       $shopProductWriter->write();
}

$newTextProduct = new TextProductWriter();

$newTextProduct->addProduct(array(1,2,3,4,5));

writeObject($newTextProduct);

$xmlProduct = new XmlProductWriter();
writeObject($xmlProduct);





