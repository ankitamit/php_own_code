<?php
declare(strict_types=1);

class Automobile {


  private $make;
  private $model;

  public function __construct($make, $model) {

  $this->make = $make;
  $this->model = $model;

}

 public function getCarDescription() : string {
  return $this->make." ". $this->model;
}

}



class AutomobileFactory {


   public static function getautomobileobject(string $make, string $model) {
     return new Automobile($make, $model);
}

}


$automobileObject = AutomobileFactory::getautomobileobject('make new', 'model new');

echo ' car description is '.$automobileObject->getCarDescription();



