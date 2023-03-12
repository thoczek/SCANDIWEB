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
    public function deleteProduct($database,$data){
        $sql="DELETE FROM products WHERE id IN (:id)";
        $pdo=$this->connect($database);
        $stmt=$pdo->prepare($sql);
        $ids=$_POST["delete-checkbox"][$rowNum=0];
        for($rowNum=1;$rowNum<count($_POST["delete-checkbox"]);$rowNum++)
        {
            $ids=$ids.", ".$_POST["delete-checkbox"][$rowNum];
            // echo $_POST["delete-checkbox"][$rowNum]."<br>";
        }
        $stmt->bindValue(":id",$ids);
        $stmt->execute();

        echo "DELETE FROM products WHERE id IN (".$ids.")";
        // foreach($_POST["delete-checkbox"] as $id)
        // {
        //      echo $id."<br>";
        //  }
        //print_r( $_REQUEST);
    }
}