<?php
$str = 'one,two,three,four';

// zero limit
print_r(explode(',',$str,0));
print "<br>";

// positive limit
print_r(explode(',',$str,3));
print "<br>";

// negative limit 
print_r(explode(',',$str,-5));
?>  

