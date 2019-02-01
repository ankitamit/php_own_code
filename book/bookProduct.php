<?php

include_once(__DIR__."/shopproduct.php");

class bookProduct extends ShopProduct {

        public $numOfPages;

	public function __construct(
			$title,
			$firstName,
			$mainName,
			$price,
			$numOfPages
			) {
                parent::__construct($title,$firstName,$mainName,$price);
		$this->numOfPages=  $numOfPages;
	}


	protected function getNumberOfPages() {
		return $this->numOfPages;
	}

	public function getSummaryLine() {
		$base = parent::getSummaryLine();
                $base .= "  Book Pages : $this->numOfPages";
		return $base;
	}

}

$pdoObject =new PDO('mysql:host=localhost;dbname=shopproduct', 'root', 'ankitamit');

$pdoObject->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$id = 1;
*/

$p = new ShopProduct("Fine Soap", "", "Bob's Bathroom", 1.33);
print $p->calculateTax(100) . "\n";


die;






 



