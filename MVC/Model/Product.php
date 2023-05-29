<?php
include('Connect.php');
    class Product extends Connect{
        public function __construct(){
            parent::__construct();
            echo "parent class";
        }
    }

    $product1= new Product();

?>