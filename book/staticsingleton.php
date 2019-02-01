<?php

abstract class singleton {

  protected function __construct() {

}

  final public static function getInstance() {

   static $instance = array();


   $getClassName = get_called_class();

   if(! isset($instance[$getClassName])) {
     $instance[$getClassName] = new $getClassName();
}

   return $instance[$getClassName];
}

   final private function __clone() {

}
}


class DatabaseConnection extends singleton {


  protected function __construct() {

}

  public function __destruct() {

}

}

$obconn= DatabaseConnection::getInstance();

var_dump($obconn);

echo "\n\n"."again it is  here "."\n\n";

$obnew = DatabaseConnection::getInstance();
var_dump($obnew);


