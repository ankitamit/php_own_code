<?php

include_once("animal.php");

class Cow extends Animal
{
    private $owner;
    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }
    public function set_owner($owner)
    {
        $this->owner = $owner;
    }
    public function get_owner()
    {
        return $this->owner;
    }
}



$newCowObject = new Cow("Herbivore","Grass");
echo ' ** cow object belongs to **'.$newCowObject->get_family()."\n\n";
echo ' ** cow object having food ** '.$newCowObject->get_food()."\n\n";


$newCowObject = new Cow("Carniover","meat");
echo ' ** cow object belongs to **'.$newCowObject->get_family()."\n\n";
echo ' ** cow object having food ** '.$newCowObject->get_food()."\n\n";

?>
