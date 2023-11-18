<?php

namespace Roberto\App\Core;

class Request
{
    private $route;
    private $params;

    public function __construct()
    {
        $rawRoute = $_SERVER["REQUEST_URI"];
        $rawRouteElements = explode("/", $rawRoute);
        $this->route = "/" . $rawRouteElements[2]; // Cambiado a 2 según la estructura de tus URLs
        $this->params = array_slice($rawRouteElements, 3); // Cambiado a 3 según la estructura de tus URLs
    }

    /**
     * Get the value of route
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Get the value of params
     */
    public function getParams()
    {
        return $this->params;
    }
}
