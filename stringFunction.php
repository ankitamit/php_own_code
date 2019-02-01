<?php

$string = 'abcdefghi';

print_r("length of string is ".strlen($string));

echo "\n\n character 9 is ** ".$string[9]. '  and '.$string[8];


echo ' *** reversing a string is **'."\n\n";

$newString = strrev($string);

print_r($string);



