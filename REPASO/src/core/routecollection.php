<?php

namespace Roberto\App\Core;

class RouteCollection {
    private $routes;

    public function __construct() {
        $this->routes = json_decode(file_get_contents("../../config/routes.json"), true);
    }

    /**
     * Get the value of routes
     */
    public function getRoutes() {
        return $this->routes;
    }
}
