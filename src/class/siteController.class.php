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
    public function productAdd($parameters)
    {
        $view = new SiteView();
        $view->productAdd($parameters);
        $view->render();
    }
}