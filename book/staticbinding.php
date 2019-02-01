<?php

class DB {

 protected static $table = 'basetable';

 public function select() {

  echo " SELECT * FROM ".static::$table;
}

 public function insert() {
   echo 'Insert into '. static::$table;
}

}

class abc extends DB {

//  protected static $table = 'abc'; 

}

$abc = new abc;

$abc->select();

