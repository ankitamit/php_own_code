<?php


function average() {
 
 
   $getArgs = func_get_args();
   $numArgs = func_num_args();

   return array_sum($getArgs)/$numArgs;
}


echo ' ** average is ** '.average(1,2,3,4,5,6,7,8,9,10)."\n\n";

echo ' ** average is *** '.average(1,2,3);

?>
