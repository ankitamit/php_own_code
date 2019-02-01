<?php

class User
{

   private $second_name;

    public function __construct(string $username, string $secondName)
    {
        $this->username_1 = $username;
        $this->second_name = $secondName;
    }

   public function __get($variable) {
       return $this->variable;
  }
  

  public function __set($key,$value) {

echo ' ** key is **'.$key.' and value is **'.$value."\n\n";
     $this->key = $value;;
} 

}

$users = [
    new User('user 1','ankit 1'),
    new User('user 2','ankit 2'),
    new User('user 3','ankit 3'),
];

print_r(array_column($users, 'username_1','second_name'));
?>
