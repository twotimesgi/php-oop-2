<?php

class Card {

    private $holder;
    private $cardNumber;
    private $CCV;
    private $expirationDate;
    
    function __construct($_holder, $_cardNumber, $_CCV, $_expirationDate)
    {
        $this->holder = $_holder;
        $this->cardNumber = $_cardNumber;
        $this->CCV = $_CCV;
        $this->expirationDate = $_expirationDate;
    }
}

?>