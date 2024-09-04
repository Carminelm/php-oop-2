<?php

class Only extends Product {
    public $only;

    public function __construct(string $_name,string $_type,float $_price,string $_description,string $_only){

        parent::__construct($_name,$_type,$_price,$_description);

        $this->only=$_only;



    }


    public function setcategory(){
        $this->only=$_only;
    }
}