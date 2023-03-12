<?php

class SiteController{

    public function productList($parameters)
    {
        $view = new SiteView();
        $view->productList($parameters);
        $view->render();
    }
    public function getProductList($parameters)
    {
        $view = new SiteView();
        $view->getProductList($parameters);
        $view->render();
    }
    public function deleteProducts($parameters)
    {
        $model = new SiteModel();
        $model->deleteProduct($GLOBALS['database'],$parameters);
    }
    public function productAdd($parameters)
    {
        $view = new SiteView();
        $view->productAdd($parameters);
        $view->render();
    }
    public function productAddform($parameters)
    {
        $view = new SiteView();
        $view->productAddform($parameters);
        $view->render();
    }
    public function productAddDatabase($parameters)
    {
        $model = new SiteModel();
        $model->addProduct($GLOBALS['database'],$parameters);
        
    }
}