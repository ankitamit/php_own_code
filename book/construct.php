<?php
namespace php\book;

class Bar {

    public function Bar() {

echo ' ** jjey **';

        // treated as constructor in PHP 5.3.0-5.3.2
        // treated as regular method as of PHP 5.3.3
    }


  function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }


}


 $bar = new Bar();


echo ' ** bar here **';

$bar->Bar();

 
?>
