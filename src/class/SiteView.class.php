<?php

class SiteView{
    private $siteHeader="", $siteBody="", $siteFooter="";
    public function render()
    {
        if(file_exists($this->siteHeader)){
            include($this->siteHeader);};
        
        if(file_exists($this->siteBody)){
        include($this->siteBody);};

        if(file_exists($this->siteFooter)){
        include($this->siteFooter);};
    }
    public function productList($parameters)
    {
        $this->siteHeader="templates/headerProductList.php";
        $this->siteBody="templates/productList.php";
        $this->siteFooter="templates/footer.php";
    }
    public function getProductList($parameters)
    {
        $this->siteBody="templates/getProductList.php";
    }
    public function productAdd($parameters)
    {
        $this->siteHeader="templates/headerProductAdd.php";
        $this->siteBody="templates/productAdd.php";
        $this->siteFooter="templates/footer.php";
    }
}