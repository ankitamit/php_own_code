<?php

class Member {


 public $username = '';

 private $loggedIn = false;


 public function login() {
    $this->loggedIn = true;
}


 public function logOut() {
    $this->loggedIn = false;
}
 
 public function isLoggedIn() {
    return $this->loggedIn;
}

 private function ankit() {
     return 'private ankit';
}
  protected function bhatia() {
    return 'protected bhatai';
}

 public function callProtected() {
    return $this->bhatia();
}
}

$member = new Member();


$member->username = 'ankit bhatia';



print_r($member->callProtected());

print_r($member->username);

