<?php

  require_once __DIR__ . '/CreditCard.php';

  class Customer{

    public $firstname;
    public $lastname;
    public $email;
    public $age;

    public function __construct($_firstname, $_lastname, $_email, $_age){
  
      $this->firstname = $_firstname;
      $this->lastname = $_lastname;
      $this->email = $_email;
      $this->age = $_age;
  
    }
  }




?>