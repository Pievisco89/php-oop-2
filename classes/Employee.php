<?php

  require_once __DIR__ . '/Customer.php';
  require_once __DIR__ . '/Product.php';

  class Employee extends Customer{

    private $level = 0;
    protected $discount = 0;
    public $status = '';
    public $products = [];


    public function __construct($_firstname, $_lastname, $_email, $_age, $_level)
    {
      parent::__construct($_firstname, $_lastname, $_email, $_age);
      $this->level = $_level;
    }

    public function getStatus($_status){
      $this->status = $_status;
      $this->setDiscount();
    }

    private function setDiscount(){
      if($this->level > 5 && $this->level < 8){
        $this->discount = 20;
        $this->status = 'silver';
      }elseif($this->level >= 8){
        $this->discount = 25;
        $this->status = 'gold';
      }
    }

    public function addProduct($name, $price, $category) {
      $nuovoProdotto = new Product($name, $price, $category);

      $this->products[] = $nuovoProdotto;
    }



  }

?>