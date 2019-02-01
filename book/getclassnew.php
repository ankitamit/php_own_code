<?php

class bar {
    public function __construct()
    {
        echo ' class of this is '.get_class($this)."\n\n";
        echo ' new class is '.get_class()."\n\n";
    }
}

class foo extends bar {
}

$newobject = new foo;

echo ' new class is '.get_class(NULL)."\n\n";
?>
