<?php

$string = '10';


if(primeNumber($string)) {


echo ' Prime Number';
} else {

echo ' Not a prime Number ';


}

function primeNumber($num) {

 if($num == 1)
     return 0;

 for($i=2;$i<=sqrt($num);$i++) {

    if($num%$i == 0)
       return FALSE;

}

 return TRUE;



}
