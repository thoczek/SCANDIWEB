<?php
/******************************************************/
//Include config
include_once("config/config.php");
/******************************************************/
 //Include autoloader
include_once("src/autoloader.php");
/******************************************************/
// Define the routes
$router= new SiteRouter();
/******************************************************/
//Requests related with adding products
/******************************************************/
$router->setRoute('/^\/add-product\/$/',"SiteController","productAdd");                     //Product add page
$router->setRoute('/^\/add-product\/form\//',"SiteController","productAddForm");            //Ajax form for specyfic product type
$router->setRoute('/^\/add-product\/add\//',"SiteController","productAddDatabase");         //Ajax add product to database
$router->setRoute('/^\/add-product\/checkSkuUnique\//',"SiteController","checkSkuUnique");  //Ajax check sku unique
/******************************************************/
//Requests on main page
/******************************************************/
$router->setRoute('/^\/$/',"SiteController","productList");                                 //Main site page
$router->setRoute('/^\/getProductList\/$/',"SiteController","getProductList");              //Ajax load product list  
$router->setRoute('/^\/deleteProducts\/$/',"SiteController","deleteProducts");              //Delete
/******************************************************/
//Dispaly routes for test purposes only
/******************************************************/
//$router->getRoutes();
/******************************************************/
//Route
/******************************************************/
$router->route($_SERVER["REQUEST_URI"]);
?>