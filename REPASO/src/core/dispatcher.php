<?php

namespace Roberto\App\Core;
use Roberto\App\Model\listModel;
use Roberto\App\View\listView;

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
       
        if (isset($this->routeList[$requestedRoute])) {
            $controllerClass = "Roberto\\App\\Controller\\" . $this->routeList[$requestedRoute]["controller"];
            $controller = new $controllerClass(new listModel(), new listView());
            $action = $this->routeList[$requestedRoute]["action"];
            $params = $this->currentRequest->getParams();
            $controller->$action(...$params);
        } else {
            // Manejar la situación donde la ruta no existe
            echo "Ruta no existe";
        }
    }
}

?>
