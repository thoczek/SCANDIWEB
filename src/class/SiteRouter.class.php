<?php
/******************************************************/
/**
 * Summary of SiteRouter
 * Class for routing html adresses to desired actions 
 */
class SiteRouter{
    /******************************************************/
  	/**
    * Summary of routes
    *Array of all defined routes (regex Route pattern, string RouteController , string routeAction)
    * @var array
    */
    private $routes=array();
    /******************************************************/
	/**
	 * Summary of setRoute
     * Function for adding routes
	 * @param mixed $routePattern - regex for parsing http address
	 * @param string $routeController - Name of controller Class
	 * @param string $routeAction - Name of controller function
	 * @return void
	 */
	public function setRoute($routePattern, string $routeController, string $routeAction) {
		$this->routes[$routePattern] = array($routeController, $routeAction);
	}
    /******************************************************/
    /**
     * Summary of getRoutes
     * Echos routes 
    * @return void
    */
	public function getRoutes() {
        
        echo $_SERVER["REQUEST_URI"]."<br>";
        print_r($this->routes);
	}
    /******************************************************/
	/**
	 * Summary of route
     * Routes current request
	 * @param mixed $currentRoute
	 * @return void
	 */
	public function route($currentRoute) {
		foreach ($this->routes as $url => $execute) {
            $matches = preg_match($url, $currentRoute, $parameters);
            if ($matches > 0) {
                $controller = new $execute[0];
                $controller->{$execute[1]}($parameters);
                break;
            }
        }
	}
}