<?php

class FileException extends Exception {


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

 try {
         if( !file_exists($file) )
          throw new \FileException (' File does not exist ');       
        $this->xml = simplexml_load_file($file);
    } catch (\FileException $e) {
         throw $e;
    } finally {
   return ;
      //  throw new \Exception ('Exception is thrown here ');
    }
         




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
$conf = new Conf("check1.xml");
} catch(\Exception $e) {

 echo ' ** exception is '.$e->getMessage();
}


