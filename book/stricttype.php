<?php

declare(strict_types = 1);


define('ANIMALS', [
    'dog',
    'cat',
    'bird'
]);

echo ANIMALS[1]; // outputs "cat"

die;





function ankit(int $a, int $b): float {

   return $a+$b;
}



print_r("it is ".ankit(1,2));

