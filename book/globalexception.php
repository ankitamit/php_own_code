<?php

declare(strict_types = 1);

function argument_error($a, $b, $c) {

echo ' **a is **'.$a. ' and b is'.$b. ' and c is '.$c.PHP_EOL;
}

echo ' ** strlenght is *'.strlen("ankit",12)."\n\n";

try {
argument_error(1,2);
}
catch(TypeError $e) {
echo 'error is type error '.$e->getMessage()."\n\n";
}
catch(\ArgumentCountError $e) {

 echo ' *error is **'.$e->getMessage(). ' and code is '.$e->getCode();
}
