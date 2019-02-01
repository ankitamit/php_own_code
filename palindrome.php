<?php

$number = "2662";

$getReverseNumber = getReverseNumber($number);


if($number == $getReverseNumber)
   echo 'It is a palindrome number ';
  else
    echo ' It is not a palindrome number ';



function getReverseNumber($number) {


  $reverse = 0;

  while($number !== 0) {

    $remainder = $number%10;
    $reverse = $reverse*10+$remainder;
    $number = (int)($number/10);
}

    return $reverse;
}

