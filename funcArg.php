<?php


function argumentList($a) {
  $number = func_num_args();


  $getArgumentsList = func_get_args();

 echo ' ** ARGUMENTS LIST IS ** '.print_r($getArgumentsList);


 echo ' ** number  of arguments is '.$number;


 echo "\n ** func argument is ** \n".func_get_arg(1);

}

argumentList(12,13,14);


