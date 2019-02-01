<?php


class MyException extends Exception {

}

class MyOtherException extends Exception {

}


class Test {

   public function testing() {

      try {
          throw new MyOtherException(' Exception thrown there');
    } 
      catch ( MyException | MyOtherException $e) {

         echo ' exception is '.$e->getMessage();
     }

}
}

$foo = new Test();
$foo->testing();



