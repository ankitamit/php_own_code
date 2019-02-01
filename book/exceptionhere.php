<?php


class newexception extends Exception {



}

function foo(){
        $bar = 1;
        try{
            throw new Exception('Foo value is wrong');
        }catch(newexception $e){
   
 echo ' ** exception caught is *** '.$e->getMessage()."\n\n";
        }
}

set_exception_handler("exception_handler");


function exception_handler($exception) {

 echo ' ** finally exception caught here is **'.$exception->getMessage();

}

foo();
?>

