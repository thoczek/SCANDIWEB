<?php
class SiteModel extends Dba{
    public function getAllProducts($database){
        $sql="SELECT * FROM products";
        $pdo=$this->connect($database);
        $stmt=$pdo->query($sql);
        $result=$stmt->fetchAll();
        return $result;
    }
    public function addProduct($database,$data){
        $sql="INSERT INTO products (id, sku, name, price, type, parameters) VALUES (NULL, :sku, :name, :price, :type, :parameters)";
        $pdo=$this->connect($database);
        $stmt=$pdo->prepare($sql);
        $stmt->bindValue(":sku",$_POST["sku"]);
        $stmt->bindValue(":name",$_POST["name"]);
        $stmt->bindValue(":price",$_POST["price"]);
        $stmt->bindValue(":type",$_POST["productType"]);
        $stmt->bindValue(":parameters",$_POST["parameters"]);
        $stmt->execute();
    }
}


// INSERT INTO `products` (`id`, `sku`, `name`, `price`, `type`, `parameters`) VALUES (NULL, 'Test', 'test', '1.00', 'DVD', '1234');