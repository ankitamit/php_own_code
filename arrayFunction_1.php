<?php

$array  = array('ONETW_1'=>array('one'=>1,'TWO'=>'2','THREE'=>'3'),array('FOUR'=>'4','five'=>'5'));


$array = '111';

$arrayChangeKeyCase = array_change_key_case_recursive($array, CASE_UPPER);

print_r($arrayChangeKeyCase);
die;



    function array_change_key_case_recursive($input, $case = null){ 
        if(!is_array($input)){ 
            trigger_error("Invalid input array '{$input}'",E_USER_NOTICE); exit; 
        } 
        // CASE_UPPER|CASE_LOWER 
        if(null === $case){ 
            $case = CASE_LOWER; 
        } 
        if(!in_array($case, array(CASE_UPPER, CASE_LOWER))){ 
            trigger_error("Case parameter '{$case}' is invalid.", E_USER_NOTICE); exit; 
        }
        $input = array_change_key_case($input, $case); 

echo ' **input is ***"'.print_r($input);
die;        
foreach($input as $key=>$array){ 
            if(is_array($array)){ 
                $input[$key] = array_change_key_case_recursive($array, $case); 
            } 
        } 
        return $input; 
    } 
?>




