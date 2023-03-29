<?php

class furniture extends product{
    private $length;
    private $width;
    private $height;
    
    function __construct($sku, $name, $price, $spec){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;

        $dimensions = explode("x", $spec);
        $this->length = $dimensions[0];
        $this->width = $dimensions[1];
        $this->height = $dimensions[2];

        $this->spec = $this->length . 'x' . $this->width . 'x' . $this->height;
        $this->type = 'furniture';
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
        return $this->spec . 'CM';
    }
    public function setSpec($spec){
        $this->spec = $spec;
    }
    public function gettype(){
        return $this->type;
    }
}