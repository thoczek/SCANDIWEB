<?php
class SiteModel extends Dba{
    public function getAllProducts($database){
        $sql="SELECT * FROM products";
        $pdo=$this->connect($database);
        $stmt=$pdo->query($sql);
        $result=$stmt->fetchAll();
        return $result;
    }
}


// INSERT INTO `products` (`id`, `sku`, `name`, `price`, `type`, `parameters`) VALUES (NULL, 'Test', 'test', '1.00', 'DVD', '1234');