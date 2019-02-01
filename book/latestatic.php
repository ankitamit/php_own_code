<?php

class foo {
  static public function test() {
    var_dump(get_called_class());
  }
  
  public function testTwo() {
    var_dump(get_called_class());
  }
}

class bar extends foo {
}

class abc {
  function test() {
    foo::test();
    bar::test();
  }
  
  function testTwo() {
    foo::testTwo();
    bar::testTwo();
  }
}

echo "basic\n";
foo::test();
bar::test();

echo "basic without static declaration\n";
foo::testTwo();
bar::testTwo();

echo "in a class\n";
$abc = new abc();
$abc->test();

echo "in a class without static declaration\n";
$abc->testTwo();

?>

