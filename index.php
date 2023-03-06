<?php
/**
 * This is the Front Controller.
 * The Front Controller decides which action to run.
 *
 * This particular Front Controller defines a route table, which says
 * which defines which URLs map to which actions.
 *
* Front controller
 */
//Include config
$configVariables=include("config/config.php");

 //Include autoloader
include_once("src/autoloader.php");

// Define the routes table
$routes = array(
    '/\/hello\/(.+)/' => array('SiteController', 'helloAction')
);
//echo $_SERVER['REQUEST_URI']."<br>";
// Decide which route to run
foreach ($routes as $url => $execute) {
    //Check request to mach defined routes
    $matches = preg_match($url, $_SERVER['REQUEST_URI']);
    echo $matches."<br>";

    // If matches
    if ($matches > 0) {
        // Start controller with passed params
        $controller = new $execute[0]; // Zmienić aby odpalał wszystko w konstruktorze
        $controller->{$execute[1]}($params);
        break;
    }
}
?>