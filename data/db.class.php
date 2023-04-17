<?php

class db {
    public $source;
    function __construct($source) {
        $this->source = $source;
    }

    private function connect(){
        try {
            return new PDO($this->source, CONFIG['db_user'], CONFIG['db_password']);
        } catch (PDOException $e) {
            return null;  //TODO: display a message
        }
    }

    public function insert($sku, $name, $price, $spec, $type){
        $db = $this->connect();
        if ($db == null){
            return;
        }
        $sql = 'SELECT * FROM products WHERE sku = :sku';
        $smt = $db->prepare($sql);
        $smt->execute([':sku' => $sku]);
        $result = $smt->rowCount();
        if ($result !== 0) {
            echo "entered SKU was not unique, please enter a unique SKU value.";
            return;
        }

        $sql = 'INSERT INTO products (sku, name, price, specs, type) VALUES (:sku, :name, :price, :specs, :type)';
        $smt = $db->prepare($sql);
        try {
            $smt->execute([
            ':sku' => $sku,
            ':name' => $name,
            ':price' => $price,
            ':specs' => $spec,
            ':type' => $type
        ]);
        } catch(PDOException $e) {
            echo "an error occured, please try again";
            echo $e;
            return;
        }
        
        $smt = null;
        $db = null;
    }
    public function getProducts(){
        $db = $this->connect();
        $products = [];
        if ($db == null){
            return;
        }
        $query = $db->query('SELECT type FROM products');
        $data = $query->fetchAll();
        $query = $db->query('SELECT * FROM products');
        $prodlist = $query->fetchAll();
        for ($i = 0; $i < count($data); $i++) {
            array_push($products, new $data[$i]['type']($prodlist[$i]['sku'], $prodlist[$i]['name'], $prodlist[$i]['price'], $prodlist[$i]['specs']));
        }
        return $products;
    }

    public function delete($sku){
        $db = $this->connect();
        if ($db == null){
            return;
        }
        $sql = 'DELETE FROM products WHERE sku = :sku';
        $smt = $db->prepare($sql);
        $smt->execute([':sku' => $sku]);
        $smt = null;
        $db = null;
    }
}