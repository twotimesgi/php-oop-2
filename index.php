<?php 
require_once(__DIR__.'/classes/user.php');
require_once(__DIR__.'/classes/product.php');

$usr = new registeredUser("Luigi","Bardella Gerbi","luigibardellagerbi@mail.com", "password123", "XXX.XXX.XX.XXX", "IT", date("Y-m-d H:i:s"));
$card = new Card("Luigi Bardella Gerbi", "XXXXXXXXXXXXXXXX", "XXX", "2022-09-25");
$usr->addCard($card);
$usr->setActiveCard(0);
$usr->setShippingAddr("Corso Savona 160");
$prod = new Product("1", "Prodotto esempio", "19.00", "Lorem ipsum dolor sit amet.","Antiparassitario");
$usr->addToCart($prod);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump($usr);
    ?>
</body>
</html>