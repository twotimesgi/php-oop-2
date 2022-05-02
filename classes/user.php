<?php

require_once(__DIR__.'/card.php');
require_once(__DIR__.'/product.php');

class User{
    private $ipAddr;
    private $country;
    private $lastVisit;
    private $shippingAddr;
    protected $cart = [];

    public function __construct($_ipAddr, $_country, $_lastVisit){
        $this->ipAddr = $_ipAddr;
        $this->country = $_country;
        $this->lastVisit = $_lastVisit;
    }
    
    function setShippingAddr($_shippingAddr){
        $this->shippingAddr = $_shippingAddr;
    }

    function getShippingAddr(){
        return $this->shippingAddr;
    }
}

class registeredUser extends User{
    private $name;
    private $surname;
    private $email;
    private $isConfirmed;
    private $password;
    private $discount = 0.20;
    private $creditCards = [];
    private $activeCard;

    function __construct($_name, $_surname, $_email, $_password, $_ipAddr, $_country, $_lastVisit){
        User::__construct($_ipAddr, $_country, $_lastVisit);
        $this->email = $_email;
        $this->password = $_password;
        $this->isConfirmed = false;
        $this->name = $_name;
        $this->surname = $_surname;
    }

    function confirmEmail(){
        $this->isConfirmed = true;
    }

    function getIsConfirmed(){
        return $this->isConfirmed;
    }

    function setEmail($_newEmail){
        $this->email = $_newEmail;
        $this->isConfirmed = false;
    }

    function getEmail(){
        return $this->email;
    }

    function setPassword($_oldPassword, $_newPassword){
        if($_oldPassword == $this->password){
            $this->password = $_newPassword;
        }
    }

    function getPassword(){
        return $this->password;
    }

    function addCard(Card $_newCard){
        array_push($this->creditCards, $_newCard);
    }

    function setActiveCard($_cardIndex){
        $this->activeCard = $this->creditCards[$_cardIndex];
    }

    function getActiveCard(){
        return $this->activeCard;
    }

    function addToCart(Product $_product){
        array_push($this->cart, $_product);
    }
}

?>