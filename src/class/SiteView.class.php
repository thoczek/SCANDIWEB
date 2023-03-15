<?php

class SiteView{
    private $siteHeader="", $siteBody="", $siteFooter="", $result;
    public function render()
    {
        if(file_exists($this->siteHeader)){
            include($this->siteHeader);};
        
        if(file_exists($this->siteBody)){
        include($this->siteBody);};

        if(file_exists($this->siteFooter)){
        include($this->siteFooter);};
    }
    public function jsonFeedback($feedback)
    {
        echo json_encode($feedback);
    }
    public function productList($parameters)
    {
        $this->siteHeader="templates/headerProductList.php";
        $this->siteBody="templates/productList.php";
        $this->siteFooter="templates/footer.php";
    }
    public function getProductList($parameters)
    {
        $database=$GLOBALS['database'];
        $db=new SiteModel();
        $this->result=$db->getAllProducts($database);
        //var_dump($result);
        $this->siteBody="templates/getProductList.php";
    }
    public function productAdd($parameters)
    {
        $this->siteHeader="templates/headerProductAdd.php";
        $this->siteBody="templates/productAdd.php";
        $this->siteFooter="templates/footer.php";
    }
    public function productAddform($parameters)
    {
        if($_POST['productType']=="DVD"){
            $this->siteBody="templates/productAddformDVD.php";
            return;
        }
        if($_POST['productType']=="Furniture"){
            $this->siteBody="templates/productAddformFurniture.php";
            return;
        }
        if($_POST['productType']=="Book"){
            $this->siteBody="templates/productAddformBook.php";
            return;
        }
    }
}