<?php

/**********************************************************
 * Summary of SiteView
 * @author Tadeusz Hoczek
 * 
 * *
 **********************************************************/
class SiteView{
    /******************************************************/
    /**
     * Summary of result
     * @var string - variable contain filename of templates wich be included for header body and footer of webpage
     */
    private $siteHeader="", $siteBody="", $siteFooter="", $result;
    /******************************************************/
    /**
     * Summary of render
     * @return void
     */
    public function render()
    {
        if(file_exists($this->siteHeader)){
            include($this->siteHeader);};
        
        if(file_exists($this->siteBody)){
            include($this->siteBody);};

        if(file_exists($this->siteFooter)){
            include($this->siteFooter);};
    }
    /******************************************************/
    /**
     * Summary of jsonFeedback
     * @param mixed $feedback
     * @return void
     */
    public function jsonFeedback($feedback)
    {
        echo json_encode($feedback);
    }
    /******************************************************/
    /**
     * Summary of productList
     * @param mixed $parameters
     * @return void
     */
    public function productList($parameters)
    {
        $this->siteHeader="templates/headerProductList.php";
        $this->siteBody="templates/productList.php";
        $this->siteFooter="templates/footer.php";
    }
    /******************************************************/
    /**
     * Summary of getProductList
     * @param mixed $parameters
     * @global string $GLOBALS['database']
     * @return void
     */
    public function getProductList($parameters)
    {
        $database=$GLOBALS['database'];
        $db=new SiteModel();
        $this->result=$db->getAllProducts($database);
        $this->siteBody="templates/getProductList.php";
    }
    /******************************************************/
    /**
     * Summary of productAdd
     * @param mixed $parameters
     * @return void
     */
    public function productAdd($parameters)
    {
        $this->siteHeader="templates/headerProductAdd.php";
        $this->siteBody="templates/productAdd.php";
        $this->siteFooter="templates/footer.php";
    }
    /******************************************************/
    /**
     * Summary of productAddform
     * @param mixed $parameters
     * @return void
     */
    public function productAddform($parameters)
    {
        if($_POST['productType']==="DVD"){
            $this->siteBody="templates/productAddformDVD.php";
            return;
        }
        if($_POST['productType']==="Furniture"){
            $this->siteBody="templates/productAddformFurniture.php";
            return;
        }
        if($_POST['productType']==="Book"){
            $this->siteBody="templates/productAddformBook.php";
            return;
        }
    }
}