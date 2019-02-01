<?php

function inverse($x) {

 if (!$x) {

   throw new \Exception (" Divisible by zero ");

}

  return 1/$x;
}



try {
  inverse(5);
}
 catch(\Exception $e) {
 echo ' exception is '.$e->getMessage()."\n\n";

}
finally {

 echo ' first finally ';

}
       

try {
   echo inverse(0)."\n\n";

} catch(\Exception $e) {
 echo ' exception is '.$e->getMessage()."\n\n";

}
finally {

 echo ' second finally ';
}
