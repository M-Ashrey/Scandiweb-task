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

    public function insert() {
        $db->insert($this->getSku(), $this->getName(), $this->getPrice(), $this->getSpec(), 'furniture');
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
    public function setSpec($length, $width, $height){
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->spec = $length . 'x' . $width . 'x' . $height;
    }
    public function getType(){
        return 'furniture';
    }
}