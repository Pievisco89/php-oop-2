<?php

  class Product{

    public $name;
    public $descrition;
    public $price;
    public $category;


    public function __construct($_name, $_price, $_category){

      $this->name = $_name;
      $this->price = $_price;
      $this->category = $_category;
    }

  }
 

?>