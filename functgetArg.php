<?php

function getArgs($x) {

 $x++;

echo ' *** arg list is **';
print_r(func_get_args());
echo ' &&** value of x is ** '.$x;

}


getArgs(4,10);


