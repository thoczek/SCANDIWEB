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
include_once("src/autoloader.php");

// Define the routes table
$routes = array(
    '/\/hello\/(.+)/' => array('HelloController', 'helloAction')
);

// Decide which route to run
foreach ($routes as $url => $execute) {

    //Check request to mach defined routes
    $matches = preg_match($url, $_SERVER['REQUEST_URI'], $params);

    // If matches
    if ($matches > 0) {

        // Start controller with passed params
        $controller = new $execute[0]; // Cmienić aby odpalał wszystko w konstruktorze
        $controller->{$execute[1]}($params);

        break;
    }
}
?>