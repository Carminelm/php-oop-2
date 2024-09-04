<?php

class Product {
    public $name;
    public $type;
    public $price;
    public $description;

}


    function __construct (string $_name,string $_type,float $_price,string $_description){
    $this->name = $_name;
    $this->type = $_type;
    $this->price = $_price;
    $this->description = $_description;
}
