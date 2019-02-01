<?php

// listing 04.79
class Person
{
    protected $name;
    private   $age;
    private   $id;
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }
    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function __destruct()
    {
        if (! empty($this->id)) {
            // save Person data
            print "saving person\n";
        }
}

}

$person = new Person('ankit',111);

 $person->setId("1122");

echo ' * unsetting here **'."\n\n";
echo ' ************ ';
echo ' ***';
echo 'adfasfa';
