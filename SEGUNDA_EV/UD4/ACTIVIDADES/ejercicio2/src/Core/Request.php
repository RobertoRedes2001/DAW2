<?php

namespace App\Core;

use App\Core\Interfaces\IRequest;

class Request implements IRequest
{
    private $route;
    private $params;

    //si se respeta la ejecucion del contenedor en entorno_trabajo
    // y se ejecuta ud4/docejemplo/public/index.php/lista
    function __construct()
    {
        $rawRoute = $_SERVER["REQUEST_URI"];
        $rawRouteElements = explode("/", $rawRoute);
        $this->route = "/" . $rawRouteElements[6];
        $this->params = array_slice($rawRouteElements, 7);
        
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
