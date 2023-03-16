<?php
/******************************************************/
/**
 * Summary of SiteModel
 * Class for fetching and other operaions on database
 */
class SiteModel extends Dba{
    /******************************************************/
    /**
     * Summary of getAllProducts
     * @param mixed $database
     * @return array Product array
     */
    public function getAllProducts($database){
        $sql="SELECT * FROM products";
        $pdo=$this->connect($database);
        $stmt=$pdo->query($sql);
        $result=$stmt->fetchAll();
        return $result;
    }
    /******************************************************/
    /**
     * Summary of addProduct
     * @param mixed $data
     * @param mixed $database
     * @return int
     */
    public function addProduct($data,$database){
        if(isset($_POST["sku"]) && 
            isset($_POST["name"]) && 
            isset($_POST["price"]) && 
            isset($_POST["productType"]) && 
            isset($_POST["parameters"]))
        {
            $sql="INSERT INTO products (id, sku, name, price, type, parameters) VALUES (NULL, :sku, :name, :price, :type, :parameters)";
            $pdo=$this->connect($database);
            $stmt=$pdo->prepare($sql);
            $stmt->bindValue(":sku",$_POST["sku"]);
            $stmt->bindValue(":name",$_POST["name"]);
            $stmt->bindValue(":price",$_POST["price"]);
            $stmt->bindValue(":type",$_POST["productType"]);
            $stmt->bindValue(":parameters",$_POST["parameters"]);
            $stmt->execute();
            return 1;
        }
        return 0;
    }
    /******************************************************/
    /**
     * Summary of deleteProduct
     * @param mixed $data
     * @param mixed $database
     * @return void
     */
    public function deleteProduct($data, $database){
        if(isset($_POST["delete-checkbox"]))
        {
            $sql="DELETE FROM products WHERE id IN (:id)";
            $pdo=$this->connect($database);
            $ids=$_POST["delete-checkbox"][$rowNum=0];
            for($rowNum=1;$rowNum<count($_POST["delete-checkbox"]);$rowNum++)
            {
                $ids=$ids.", ".$_POST["delete-checkbox"][$rowNum];
            }
            $pdo->query("DELETE FROM products WHERE id IN (".$ids.")");
        }
    }
    /******************************************************/
    /**
     * Summary of checkSkuUnique
     * @param mixed $data
     * @param mixed $database
     * @return int
     */
    public function checkSkuUnique($data,$database){
        if(isset($_POST["sku"]))
        {
            $sql="SELECT * FROM products WHERE sku = :sku";
            $pdo=$this->connect($database);
            $stmt=$pdo->prepare($sql);
            $stmt->bindValue(":sku",$_POST["sku"]);
            $stmt->execute();
            $result=$stmt->fetchAll();
            if(count($result)>0){
                return 1;
            }
        }
        return 0;
    }

}