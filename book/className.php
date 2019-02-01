<?php

namespace book;


class classBraces
{

    public function __construct(constantDeclare $constantDeclareClass) {
          $this->constantDeclareClass = $constantDeclareClass;

  }
    public function getBraces() 
    {
        echo ' *** get Braces here **';
        echo ' ** again braces here ** ';  
    } 


    public function getBraceAgain() 
    {
     echo ' * constant Declare is ** '.$this->constantDeclareClass->getVersion()."\n\n";
    }
}

include_once("constantDeclare.php");
$classBrace = new classBraces(new constantDeclare());
$classBrace->getBraces();
$classBrace->getBraceAgain();

      
