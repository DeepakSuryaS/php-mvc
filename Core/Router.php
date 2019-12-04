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
     * Parameters for the matched route
     * @var array
     */
    protected $params = [];

    /**
     * Add a route to the routing table
     * 
     * @param string $route The route url
     * @param array $params Parameters (controller, action, etc)
     * 
     * return void
     */
    public function add($route, $params = []) {
      // convert the route to a regular expression
      // escape forward slashes
      $route = preg_replace('/\//', '\\/', $route);

      // convert variable e.g. {controller}
      $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);

      // convert variables with custom regular expressions e.g. {id:\d+}
      $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);

      // add start and end delimiters, and case insensitive flag
      $route = '/^' . $route . '$/i';

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
    
    /**
     * Match the route to the routes in the routing table, setting the $params property if a route is found
     * 
     * @param string $url The route url
     * 
     * @return boolean true if a match is found, else false
     */
    public function match($url) {
      /* foreach($this->routes as $route => $params) {
        if($url == $route) {
          $this->params = $params;
          return true;
        }
      } */

      // Match to the fixed url format /controller/action
      // $reg_exp = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/";

      foreach($this->routes as $route => $params) {
        if(preg_match($route, $url, $matches)) {
          // get named capture group values
          // $params = [];
  
          foreach($matches as $key => $match) {
            if(is_string($key)) {
              $params[$key] = $match;
            }
          }
  
          $this->params = $params;
          return true;
        }
      }
      return false;
    }

    /**
     * Get the currently matched parameters
     * 
     * @return array
     */
    public function getParams() {
      return $this->params;
    }
  }
?>