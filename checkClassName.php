<?php

class TestClass {

    public $declared = null;
    
}

$testObject = new TestClass;

var_dump(property_exists("TestClass", "dynamic")); // boolean false, as expected
var_dump(property_exists($testObject, "dynamic")); // boolean false, same as above

$testObject->dynamic = 'ankit';
var_dump(property_exists($testObject, "dynamic")); // boolean true

unset($testObject->dynamic);
var_dump(property_exists($testObject, "dynamic")); // boolean false, again.

var_dump(property_exists($testObject, "declared")); // boolean true, as espected

unset($testObject->declared);
var_dump(property_exists($testObject, "declared")); // boolean true, even if has been unset()
