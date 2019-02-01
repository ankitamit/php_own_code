<?php


// listing 04.45
class DomainObject
{


  public static function create(): DomainObject {
 
    return new static();
}

}

// listing 04.46
class User extends DomainObject
{


}
// listing 04.47
class Document extends DomainObject
{

}

echo 'object is '."\n\n";
print_r(Document::create());

