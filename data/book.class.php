<?php

class book extends product{

    function __construct($sku, $name, $price, $spec){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->spec = $spec;
        $this->type = 'book';
    }

    public function insert() {
        $db->insert($this->getSku(), $this->getName(), $this->getPrice(), $this->getSpec(), 'book');
    }
    
    public function getSku(){
        return $this->sku;
    }
    public function setSku($sku){
        $this->sku = $sku;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getPrice(){
        return '$' . $this->price;
    }
    public function setPrice($price){
        $this->price = $price;
    }

    public function getSpec(){
        return $this->spec . 'KG';
    }
    public function setSpec($spec){
        $this->spec = $spec;
    }
    public function getType(){
        return 'book';
    }
}