<?php


//cd product
// Book Product


class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price = 0;
    public $numOfPages=0;
    public $musicPlayLength=0;

    public function __construct(
        $title,
        $firstName,
        $mainName,
        $price,  
        $numOfPages=0,
        $musicPlayLength=0,
    ) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numOfPages=  $numOfPages;
        $this->musicPlayLength = $musicPlayLength;
    }
    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }

    public function getNumberOfPages() {
      return $this->numOfPages;
}

   public function getMusicPlayLength() {
       return $this->musicPlayLength;
   }

}


$shopProduct = new ShopProduct("11519","Ankit","Bhatia",'1222');

echo ' ** producer name is **'."\n\n";
print_r($shopProduct->getProducer());

echo "\n\n";

