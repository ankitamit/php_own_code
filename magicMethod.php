<?php

class magicMethod {


 protected $properties;
 public $firstName;
 public $lastName;


 public function __set($key,$value) {

echo ' ***setting key ***'.$key.'and value is '.$value."\n\n";
   $this->key = $value;
   // $this->properties[$key]  = $value;
} 



 public function __get($key) {


   if($this->__isset($key))  {
echo ' ** property exist returning ***'."\n\n"; 
     return  $this->key;
}
 else {

 echo ' ** Property does not exists ***'.$key."\n\n";
}

}


public function __isset($property)  
{
print_r($this);
 
echo ' ** property is isset*'.$property."\n\n"; 
return isset($this->property);  
}


/*
   if(array_key_exists($key,$this->properties))
   return $this->properties[$key];
*/

public function __toString() {

 return $this->firstName;

}


}




$magicObject = new magicMethod();



$magicObject->firstName = 'ankit';


echo  '** magic object is ***'."\n\n";
echo $magicObject;
die;
/*
echo ' ** property first name is***'.$magicObject->firstName."\n\n";
*/
$magicObject->lastName = 'bhatia';
//echo '** property exists here ****'.property_exists($magicObject,'lastName')."\n\n";
//echo ' ** property last name is***'.$magicObject->lastName."\n\n";

echo ' ** isset is *****'.(bool)isset($magicObject->lastName)."\n\n"; 
