<?php

namespace App\Controller;

class Product {

    public function list(){
        $productList = array(1, 2, 3, 4, 5);
        require '../view/product.php';
    }

    public function view(string $id){
        require '../view/product.php';
    }
}
