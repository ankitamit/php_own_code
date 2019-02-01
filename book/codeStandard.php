<?php

//Code Standard Testing

namespace book;

class CodeStandard 
{

    public $a = 10;
    public $b = 20;

    public $c = true;

    function getSum($a, $b) 
    {
        if ($a == $b)  {
            return 2*$a;
        }
        elseif ($a !== $b)  {
            return $a+$b;    
        }
    } 

    function getMinus($a, $b) 
    {

        echo '**8 c value  is **** '.(bool)$this->c."\n\n";
        if ($a === $b)
            return 0;
        elseif ($a > $b)
            return $a-$b;
        else 
            return $b-$a;     
   }   
}  


 $codeStandard = new CodeStandard();
 $getSum = $codeStandard->getSum(10,20);

 echo ' ** sum is ** '.$getSum."\n\n";
 $getSumAgain = $codeStandard->getSum(10,10);

 echo ' ** again sum is ** '.$getSumAgain."\n\n";

 $getSubtract = $codeStandard->getMinus(1,2);

  echo ' ** get subtract is ** '.$getSubtract."\n\n";

 

