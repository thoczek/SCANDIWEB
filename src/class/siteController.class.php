<?php
/******************************************************/
/**
 * Summary of SiteController
 */
class SiteController{
    /******************************************************/
    /**
     * Summary of productList
     * @param mixed $parameters
     * @return void
     */
    public function productList($parameters)
    {
        $view = new SiteView();
        $view->productList($parameters);
        $view->render();
    }
    /******************************************************/
    /**
     * Summary of getProductList
     * @param mixed $parameters
     * @return void
     */
    public function getProductList($parameters)
    {
        $view = new SiteView();
        $view->getProductList($parameters);
        $view->render();
    }
    /******************************************************/
    /**
     * Summary of deleteProducts
     * @param mixed $parameters
     * @global string $GLOBALS['database']
     * @return void
     */
    public function deleteProducts($parameters)
    {
        $model = new SiteModel();
        $model->deleteProduct($parameters,$GLOBALS['database']);
    }
    /******************************************************/
    /**
     * Summary of productAdd
     * @param mixed $parameters
     * @return void
     */
    public function productAdd($parameters)
    {
        $view = new SiteView();
        $view->productAdd($parameters);
        $view->render();
    }
    /******************************************************/
    /**
     * Summary of productAddform
     * @param mixed $parameters
     * @return void
     */
    public function productAddform($parameters)
    {
        $view = new SiteView();
        $view->productAddform($parameters);
        $view->render();
    }
    /******************************************************/ 
    /**
     * Summary of checkSkuUnique
     * @param mixed $parameters
     * @global string $GLOBALS['database']
     * @return void
     */
    public function checkSkuUnique($parameters)
    {
        $model = new SiteModel();
        $result=$model->checkSkuUnique($parameters,$GLOBALS['database']);
        $view = new SiteView();
        $view->jsonFeedback($result);
    }
    /******************************************************/
    /**
     * Summary of productAddDatabase
     * @param mixed $parameters
     * @global string $GLOBALS['database']
     * @return void
     */
    public function productAddDatabase($parameters)
    {
        $model = new SiteModel();
        $model->addProduct($parameters,$GLOBALS['database']);
        
    }
}