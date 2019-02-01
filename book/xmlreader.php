<?php

$xml = simplexml_load_file("employee.xml");



$record = $xml->record;


for($i=0; $i<count($record); $i++) {


  echo ' name is '.$record[$i]->name."\n\n";
  echo ' position is '.$record[$i]->position."\n\n";
  echo ' man number is '.$record[$i]->attributes()->man_no."\n\n";

 
}

