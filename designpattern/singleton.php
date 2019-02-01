<?php

class BookSingleton {
   private $author = 'ankit bhatia';
   private $title = ' BOOK 1';
   private static $book = NULL;
   private static $issued = FALSE;

   public static function  borrowbook() {


    if(FALSE == self::$issued) {

      if(NULL == self::$book) {
        self::$book = new BookSingleton();
      }

   
     self::$issued = TRUE;
     return self::$book;
  }
    else
       return NULL;
}

   public function returnbook(BookSingleton $bookreturned) {
        self::$issued = FALSE;
}

   public function getAuthor() {
     return $this->author; 
}

  public function getTitle() {
     return $this->title;
}

  public function getAuthorTitle() {
    return $this->author." ".$this->title;
}

}

class BorrowBooknew {

   public $havebook;
   public $bookobj;

    public function getBookDetails() {

     if($this->havebook) {
       return " Book details are ".$this->bookobj->getAuthorTitle();
     }

}    

    public function borrowBook() {

      $this->bookobj = BookSingleton::borrowbook();

      if( NULL != $this->bookobj) {
        $this->havebook = TRUE;
      } else {
        $this->havebook = FALSE;
         echo "\n\n Book is not present \n";
     }

}      


   public function returnBook() {
      
       if($this->havebook) {
          $this->bookobj->returnbook($this->bookobj);
   }

   }

}


$book1 = new BorrowBooknew();

$book1->borrowBook();

$book1->getBookDetails();


$book1->returnBook();



$book2 = new BorrowBooknew();
$book2->borrowBook();

$book3 = new BorrowBooknew();
$book3->borrowBook();



