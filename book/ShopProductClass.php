<?php

include_once(__DIR__."/bookProduct.php");
include_once(__DIR__."/cdProduct.php");

class ShopProductClass {

 public static function getInstance($id, PDO $pdo) {


    $stmt = $pdo->prepare("SELECT * FROM products WHERE id=:id");
    $stmt->execute(['id' => $id]); 
    $row = $stmt->fetch();

  
   if($empty($row))
     return NULL;


  if($row['type'] == 'book') {


 $product = new bookProduct($row['title'],$row['firstname'],$row['mainname'],$row['price'],$row['numpages']); 

}
 else if($row['type'] == 'cd') {
 $product = new cdProduct($row['title'],$row['firstname'],$row['mainname'],$row['price'],$row['playlength']); 
}

  return $product;
}


}

$object = new ShopProductClass();

 
