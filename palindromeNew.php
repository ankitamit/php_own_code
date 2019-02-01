<?php

$string = 'abcdcba';

$strlength = strlen($string);

if(checkPalindrome($string)) {

 echo ' Palindrome String'."\n\n";

}else {
  
 echo '  Not a Palindrome String '."\n\n";

}




function checkPalindrome($string) {


  if(strlen($string) == 0 || strlen($string) == 1)
    return TRUE;

  else{
   
     if(substr($string,0,1) == substr($string,strlen($string)-1,1))  {
         return checkPalindrome(substr($string,1,strlen($string)-2));
    }
     else
         return FALSE;
}



}
