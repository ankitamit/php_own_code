<?php

abstract class phpmanual {


   protected $php = 20;
   abstract protected function getValue();
   abstract protected function getPrefixValue($prefix);

   public function  printout() {
    return $this->getValue();
}
}



class ConcreteClass extends phpmanual {

   public function getValue() {
      return 'CONCRETECLASS_1';     
}

  public function getPrefixValue($prefixValue) {
echo ' ** php is ** '.$this->php."\n\n";
   return $prefixValue.'CONCRETECLASS_1';
}

}

$concreteClass = new ConcreteClass();
print ' printout is '.$concreteClass->printout();
print 'prefix value is '.$concreteClass->getPrefixValue('first');



