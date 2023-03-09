<?php
//Include config
$configVariables=include("config/config.php");

 //Include autoloader
include_once("src/autoloader.php");

// Define the routes table
$router= new SiteRouter();
$router->setRoute('/\/getProductList\//',"SiteController","getProductList");
$router->setRoute('/\/addproducts\//',"SiteController","productAdd");
$router->setRoute('/\//',"SiteController","productList");
//$router->getRoutes();
$router->route($_SERVER["REQUEST_URI"]);

?>