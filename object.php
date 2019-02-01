<?php

class Person
{
    public $name;
    private $newProp;


    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function __set($key,$value) {
     $this->key = $value;
}
    public function __get($prop)
    {

echo '** get prop is **'.$prop."\n\n";
        return $this->$prop;
    }

    public function __isset($prop)
    {

echo '**prop is **'.$prop."\n\n";
        return isset($this->$prop);
    }

}

$person_1 = new Person('ankit');

$person_1->newProp = 'bhatia';


$people = [
    new Person('Fred'),
    new Person('Jane'),
    new Person('John'),
];

print_r(array_column($people, 'name'));
?>
