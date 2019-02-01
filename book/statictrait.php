<?php

trait PriceUtilities {


 private static $taxrate = 17;

   public static function calculateTax($price): float {


    return ((self::$taxrate*$price))/100;

}

}


class UtilityService  {


 use PriceUtilities;

}

//$obj = new UtilityService();
echo ' calculate tax is '.UtilityService::calculateTax(1000)."\n\n";

