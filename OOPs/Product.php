<?php
  class Product{
    //data member
    private  $pid,$pname;
    //member function

     public function __construct($pid,$pname){
        $this->pid= $pid;
        $this->pname= $pname;
     }
    public function setProduct(){
        $this->pid = 123;
        $this->pname= "laptop";
    }
    public function showProduct(){
        echo "<h1>".$this->pid."</h1>";
        echo "<h1>".$this->pname."</h1>";
    }
  }

  $product1 = new Product(123,"laptop");
  //$product1->setProduct();
  $product1->showProduct();

?>