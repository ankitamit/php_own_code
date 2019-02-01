<?php

class FileException extends \Exception
{

}


// listing 04.57
class Conf
{
    private $file;
    private $xml;
    private $lastmatch;
    public function __construct(string $file)
    {
        $this->file = $file;

        if (! file_exists($file) )
        throw new \FileException(" file does not exists");
        $this->xml = simplexml_load_file($file);

    }
    public function write()
    {
        file_put_contents($this->file, $this->xml->asXML());
    }


 public function get(string $str)
    {
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
        if (count($matches)) {
            $this->lastmatch = $matches[0];
            return (string)$matches[0];
        }
        return null;
    }
    public function set(string $key, string $value)
    {
        if (! is_null($this->get($key))) {
            $this->lastmatch[0]=$value;
            return;
        }
        $conf = $this->xml->conf;
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}

try {
$xml = new Conf("check1.xml");
} catch(\FileException $e) {
 echo ' ** exception exists is **'.$e->getMessage(). 'and error code is '.$e->getCode(). ' and file is '.$e->getFile(). ' and trace is '.print_r($e->getTrace());
  
 }
finally {

 echo '** final clause is runing **'."\n\n";
}



//$xml->get('
