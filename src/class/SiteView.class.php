<?php

class SiteView{
    private $siteHeader, $siteBody, $siteFooter;
    public function render()
    {
        include($this->siteHeader);
        include($this->siteBody);
        include($this->siteFooter);
    }
    public function productList($parameters)
    {
        $this->siteHeader="templates/header.php";
        $this->siteBody="templates/productList.php";
        $this->siteFooter="templates/footer.php";
    }
    public function productAdd($parameters)
    {
        $this->siteHeader="templates/header.php";
        $this->siteBody="templates/productAdd.php";
        $this->siteFooter="templates/footer.php";
    }
}