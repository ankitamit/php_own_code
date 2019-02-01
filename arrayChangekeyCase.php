<?php

$arrayInput = array('ONE'=> array('one_1'=>1,'oNe_2'=>'2'),'Two'=>array('two_1'=>'3','two_2'=>'4'),'three'=>array('three_1'=>array('three_2'=>'32','three_3'=>'33')));


$changeKeyCase = array_key_case_change_recursive($arrayInput);


echo ' ** array is **'."\n\n";

print_r($changeKeyCase);
die;
function array_key_case_change_recursive($arrayInput, $case = null) {



echo ' ** array Input is **'."\n\n";
print_r($arrayInput);


   if($case == null)
    $case = CASE_UPPER;

   if(!in_array($case, array(CASE_UPPER,CASE_LOWER))) {
   trigger_error('CASE ERROR');
    exit;   
   }


   $arrayInput = array_change_key_case($arrayInput,$case);


  foreach($arrayInput as $key=>$value) {


   if(is_array($value)) {
  
    $arrayInput[$key] = array_key_case_change_recursive($value,$case);
   
}
}


 return $arrayInput;


}
