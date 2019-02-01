<?php

class carfactory {

 public static function getobject($type = '') {

   if($type == '')
     throw new Exception(" Type  cannot be empty ");

   $classname = "class_".ucfirst($type);

   if(class_exists($classname))  {
   
     $object = new $classname;
} else {

    throw new Exception(" Class does not exists ");
}

   return $object;
}

}


class class_SUV {


  public function __construct() {
    echo ' SUV OBJECT CREATED ';
}

}


class class_Hyundai {

    public function __construct() {

      echo '  CLASS HYUNDAI OBJECT CREATE ';
}
}


carfactory::getobject("suv");
echo "\n\n";
carfactory::getobject("hyundai");
echo "\n\n";
try {
carfactory::getobject("ankit");
} catch(\Throwable $e) {
  print_r($e->getMessage());
}

try {
carfactory::getobject("");
} catch (\Throwable $e) {
  print_r($e->getMessage());
}
