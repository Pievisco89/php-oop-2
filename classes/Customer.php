<?php

  require_once __DIR__ . '/CreditCard.php';

  class Customer{

    use CreditCard;
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

    public function getCreditCard($_number, $_validDate, $_cvv)
    {
      if(!is_int($_number)){
        throw new Exception("Carta di credito non valida");
      }
      $this->number = $_number;
      $this->validDate = $_validDate;
      $this->cvv = $_cvv;
    }
  }




?>