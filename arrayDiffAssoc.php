<?php

$array1=  array('1','2','3');
$array2 = array('2','3','4');

$arraymerge = array_merge(array_diff($array1,$array2),array_diff($array2,$array1));

print_r($arraymerge);
die;
 
$arr = array('1','4','4','3','2','9','2'); 


 $array1 = array("a","b","c","a","a"); 
 $array2 = array("a"); 

    $diff = array_diff($array1,$array2); 

print_r($diff);

print_r(array_diff_assoc($array1,$array2));



?> 
