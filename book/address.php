<?php


declare(strict_types=1);

class AddressOutputManager {


 private $ipAddresses = ['74.121.197.34','74.121.197.35','74.121.197.45','10.10.14.51'];


 public function resolveIPAddress(bool $resolve) {

echo ' ** value of resolve is **'.$resolve."\n\n";
die;
   foreach($this->ipAddresses as $ipAddress) {

          if($resolve) {

      print gethostbyaddr($ipAddress);

}

   print "\n\n";

}

}


}


$settings = simplexml_load_file(__DIR__."/resolve.xml");
$manager = new AddressOutputManager();
$manager->resolveIPAddress("1234",(string)$settings->resolvedomains);
