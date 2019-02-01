<?php

$path_with_query = "http://www.ex.com/getdat.php?dep=n/a&title=boss";

$path=explode("?",$path_with_query);
$filename=basename($path[0]);
$query=$path[1];


print_r(basename("/home/ankit/ankit.php?a=b&php=c", "php=c"));

