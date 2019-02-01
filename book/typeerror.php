<?php
    function xc(array $a){    
    }    
    try{
        xc(4);
    }catch (TypeError $e){
        echo 'it is '.$e->getMessage();
    }
?>
