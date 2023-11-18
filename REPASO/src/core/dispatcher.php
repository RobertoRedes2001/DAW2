<?php

namespace Roberto\App\Core;
use Roberto\App\Model\dataModel;
use Roberto\App\View\dataView;

class Dispatcher{
    private $routeList;
    private $currentRequest;

    public function __construct($routeList, $currentRequest)
    {
        $this->routeList = $routeList;
        $this->currentRequest = $currentRequest;
        $this->dispatch(); 
    }

    private function dispatch()
    {
        $requestedRoute = $this->currentRequest->getRoute();
        print_r($requestedRoute);

        if (isset($this->routeList['/list'])) {
            $controllerClass = "Roberto\\App\\Controller\\" . $this->routeList['/list']["controller"];
            $controller = new $controllerClass(new dataModel(), new dataView());
            $action = $this->routeList['/list']["action"];
            $params = $this->currentRequest->getParams();
            $controller->$action(...$params);
        } else {
            // Manejar la situación donde la ruta no existe
            echo "Ruta no existe";
        }
    }
}

?>
