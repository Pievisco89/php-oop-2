<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
`$c = new CreditCard(..);
$user->insertCreditCard($c);`
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php

  require_once __DIR__ . '/classes/Product.php';
  require_once __DIR__ . '/classes/Customer.php';
  require_once __DIR__ . '/classes/Employee.php';


  $produtc1 = new Product('Iphone', 600, 'Elettronica'); 
  var_dump($produtc1);

  $produtc2 = new Product('Pc', 100, 'Computer');


  $customer1 = new Customer('Ugo', 'De Ughi', 'ugo@gmail.it', 50);
  
  var_dump($customer1);


  $customer2 = new Employee('Giuseppe', 'Verdi', 'g.verdi@gmail.com', 80, 6);
  $customer2->getStatus('');
  $customer2->addProduct('Iphone', 600, 'Elettronica');
  var_dump($customer2);


  $customer3 = new Employee('Alejandro', 'Visconti', 'alevisco@gmail.com', 25, 9);
  $customer3->getStatus('');
  var_dump($customer3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP-2</title>
</head>
<body>
  
</body>
</html>