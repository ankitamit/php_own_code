<?php

class conf {


  private $filename;
  private $xml;


 public function __construct(string $file) {

     $this->filename = $file;
     $this->xml  = simplexml_load_file($file);

print_r($this->xml);
die;

}




}



$newconfObject = new conf("xmlfile.xml");


