<?php

$db = new PDO('mysql:host=localhost; dbname=estore', 'root', 'root');
session_start();

class Db {

   protected function connect() {
    return $db = new PDO('mysql:host=localhost; dbname=estore', 'root', 'root');
   }
}

class Product extends Db {
    
    public function getItem () {
        if (isset($_GET['category'])) {
            $sql = "SELECT * FROM products WHERE category = :categoryTitle";
            $stmt = Db::connect()->prepare($sql);
            $stmt->bindValue(':categoryTitle', $_GET['category']);
            $stmt->execute();
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $sql = "SELECT * FROM products";
            $result = Db::connect()->query($sql);

            $products = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        foreach ($products as $product) {
            include ('./template/__product-item.php');
        }
    }
}


