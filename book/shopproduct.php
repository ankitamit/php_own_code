<?php

include_once(__DIR__."/cdProduct.php");
require_once(__DIR__."/PriceUtilities.php");


class ShopProduct
{
        use PriceUtilities;
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price = 0;

        private $discount;

	public function __construct(
			$title,
			$firstName,
			$mainName,
			$price ) {
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
	}


       public function setDiscount(int $discount) {
            $this->discount = $discount;
       }


        public function getDiscount() {
            return $this->discount;
        } 

       public function getPrice() {
          return $this->price- $this->discount;
     }

       public function setID($id) {
           $this->Id = $id;
   }


        public function getId() {
             return $this->Id;
  }
	public function getProducer(ShopProduct $shopProduct)
	{
		return $shopProduct->producerFirstName . " "
			. $shopProduct->producerMainName;
	}
      
        function getSummaryLine()  {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }

 
 

    public static function getInstance(int $id, \PDO $pdo) : ShopProduct {

   
       $stmt = $pdo->prepare("select * from products where id=?");
       $result = $stmt->execute([$id]);
       $row = $stmt->fetch();

       if(empty($row))
         return null;



       $typeRow = $row['type'];
 
       if($row['type'] == 'cdproduct') {

        $shopProduct = new cdProduct($row['title'],$row['firstname'],$row['mainname'],$row['price'],$row['playlength']);

}
      $shopProduct->setDiscount($row['discount']);
      $shopProduct->setID($row['id']);
     return $shopProduct;
}  
   
}


$p = new ShopProduct("Fine Soap", "", "Bob's Bathroom", 1.33);
print $p->calculateTax(100) . "\n";



