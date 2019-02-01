<?php

echo ' **  value of a variable is **'.is_null($a);

die;
$array = array(null);
$oldArray = [null];

$newarray = array_merge($array,$oldArray);

echo ' ***new array is **';
print_r($newarray);


