<?php

$a = 111;

echo ' ** inti is ** '.is_int($a)."\n\n";

$a = true;

echo ' *** bool value is **'.is_integer($a)."\n\n";

$a = null;

echo ' * value of null is ** '.empty($a)."\n\n";

$ipAddress = gethostbyaddr("74.121.197.34");

echo ' ** host nname is **  '.$ipAddress."\n\n";
