<?php

$xml = new DOMDocument();
$xml->load("books.xml");

$x = $xml->documentElement;


foreach ($x->childNodes as $item) {

 echo '** item is **'.$item->nodeName. ' and its value is '.$item->nodeValue;

}

