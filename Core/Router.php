<?php
  /**
   * Router
   * PHP version 7.3.11
   */

  class Router {
    /** 
     * Associative array of routes (the routing table) 
     * @var array
     */
    protected $routes = [];

    /**
     * Add a route to the routing table
     * 
     * @param string $route The route url
     * @param array $params Parameters (controller, action, etc)
     * 
     * return void
     */
    public function add($route, $params) {
      $this->routes[$route] = $params;
      // var_dump($this->routes);
    }

    /**
     * Get all the routes from the routing table
     * 
     * @return array 
     */
    public function getRoutes() {
      return $this->routes;
    }
    
  }
?>