<?php

class SiteRouter{
    /*************************************************************************************
     * Summary of routes
     * @routes - array of defined routes in following way:
     * routes[key]=> array(RouteControllerClass, routeColtrollerMethod)
     */
    private $routes=array();

	public function setRoute($routePattern, string $routeController, string $routeAction) {
        //echo "<br>Adding route:".$routePattern."--".$routeController."--".$routeAction."<br>";
		$this->routes[$routePattern] = array($routeController, $routeAction);
        //echo var_dump($this->routes);
	}

	public function getRoutes() {
        echo $_SERVER["REQUEST_URI"]."<br>";
		var_dump($this->routes);
	}

	public function route($currentRoute) {
		foreach ($this->routes as $url => $execute) {
            //Check request to mach defined routes
            //echo "<br>".$url." -URL-<br>";
            //echo "<br>".var_dump($execute)." -URL-<br>";
            //echo "<br>--".$currentRoute."-currentRoute-<br>";
            $matches = preg_match($url, $currentRoute, $parameters);
        
            // If current route matches defined expression
            if ($matches > 0) {
                // Start controller with passed params
                //echo "<br>".var_dump($parameters)."<br>";
                $controller = new $execute[0];
                $controller->{$execute[1]}($parameters);
                break;
            }
        }
	}
}