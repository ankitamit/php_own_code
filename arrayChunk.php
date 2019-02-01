<?php

$array = array(array('key1'=>'one','key4'=>'ankit'),array('key2'=>'two','key3'=>'three'),array('key4'=>'four','five'));

$arrayChunks = array_chunk($array,2,true);

//print_r($arrayChunks);


$arrayColumn = array(array('one'=>'ankit','two'=>'lucky'),array('one'=>'ankit_1','two_1'=>'bhatia_1'),array('one'=>'ankit_2','two_2'=>'ankit_2'));


print_r(array_column($array,'key1','key4'));
