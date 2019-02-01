<?php

include_once("mobile.php");
include_once("laser.php");
include_once("projector.php");

class Galaxy extends  Mobile {

 use Laser;

/*
  public function power() {
    echo '  Iam inside Galaxy class ';
}
*/

}

$obj = new Galaxy();
$obj->power();
echo "\n\n";
$obj->battery();
$obj->range();


