<?php

$array1 = array('1','a'=>'b','c'=>'d','e'=>array(1,2),'f'=>array(2,4,5),'g'=>array(1,2,3));


$array2 = array('c'=>'d','e'=>array(1,3),'2','1','c'=>'s','f'=>'s','g'=>array(1,2,3));



$differenceArray = array_diff_assoc_recursive($array1,$array2);

printf("\n Difference array is \n\n");


print_r($differenceArray);



function array_diff_assoc_recursive($array1,$array2) {

  $difference  = array();



  foreach($array1 as $key=>$value) {

   
     if(!is_array($value) && (!array_key_exists($key,$array2) || $array2[$key] != $value)) { 
          $difference[$key] = $value; 
}
     else {

    if(is_array($value)) {
       if(!array_key_exists($key,$array2) ||  !is_array($array2[$key])) { 
            $difference[$key] = $value;
}
     else { 
    $newDiff = array_diff_assoc_recursive($array1[$key],$array2[$key]);

    if(!empty($newDiff))
       $difference[$key] = $newDiff;    
}      
}
}

  
}


   

   return $difference;
}

