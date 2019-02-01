<?php
class A {

  

     public function foo() {
     echo ' **foo here **';
}
 
    public function test() {
        static::foo();
    }
}


class C extends A {
    public function foo() {
echo ' ** inside c here **'."\n\n";
        /* original method is replaced; the scope of the new one is C */
    }
}

$c = new C();
$c->test();   //fails
?>
