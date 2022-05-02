<?php

class Product{
    private $productId;
    private $productTitle;
    private $manufacturer;
    private $price;
    private $weight;
    private $desc;
    private $category;

    function __construct($_productId, $_productTitle ,float $_price, $_desc, $_category)
    {
        $this->productTitle = $_productTitle;
        $this->productId = $_productId;
        $this->price = $_price;
        $this->desc = $_desc;
        $this->category = $_category;
    }

    function setWeight($_weight){
        $this->weight = $_weight;
    }

    function setPrice($_price){
        $this->price = $_price;
    }

    function setManufacturer($_manufacturer){
        $this->manufacturer = $_manufacturer;
    }
}

?>