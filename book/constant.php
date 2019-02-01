<?php

namespace book;

class constantDeclare {

 const VERSION = '1.0';
 
 public function getVersion() {

 echo '** version is ** '.constantDeclare::VERSION;
}

} 

$constDeclare = new constantDeclare();
$constDeclare->getVersion();

