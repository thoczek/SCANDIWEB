<?php
//Include config
$configVariables=include("config/config.php");

 //Include autoloader
include_once("src/autoloader.php");

// Define the routes
$router= new SiteRouter();

$router->setRoute('/^\/addProduct\/$/',"SiteController","productAdd");                      //Main page
$router->setRoute('/^\/addProduct\/form\/$/',"SiteController","productAddForm");            //Ajax form for specyfic product type
$router->setRoute('/^\/addProduct\/add\/$/',"SiteController","productAddDatabase");         //Ajax add product to database
$router->setRoute('/^\/addProduct\/checkSkuUnique\/$/',"SiteController","checkSkuUnique");    //Ajax check sku unique

$router->setRoute('/^\/deleteProducts\/$/',"SiteController","deleteProducts");         //Detete products
$router->setRoute('/^\/$/',"SiteController","productList");                      //Main site page 
$router->setRoute('/^\/getProductList\/$/',"SiteController","getProductList");      //Ajax load product list          
//$router->getRoutes();
$router->route($_SERVER["REQUEST_URI"]);
?>