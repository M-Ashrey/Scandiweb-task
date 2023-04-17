<?php 

abstract class product {
    protected $sku;
    protected $name;
    protected $price;
    protected $spec;
    protected $type;


    abstract protected function getSku();
    abstract protected function setSku($sku);

    abstract protected function getName();
    abstract protected function setName($name);

    abstract protected function getPrice();
    abstract protected function setPrice($price);

    abstract protected function getSpec();
    abstract protected function setSpec($spec);

    abstract protected function getType();

}