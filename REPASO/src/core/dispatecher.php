<?php

namespace Roberto\App\Core;

class Dispatcher
{
    private $routeList;
    private $currentRequest;

    public function __construct()
    {
        $this->routeList = json_decode(file_get_contents(__DIR__ . "/../../config/Routes.json"), true);
        $this->currentRequest = new Request(); // Puedes adaptar esto según tu implementación real de la clase Request
        $this->dispatch();
    }

    private function dispatch()
    {
        $requestedRoute = $this->currentRequest->getRoute();

        if (isset($this->routeList[$requestedRoute])) {
            $controllerClass = "App\\Controllers\\" . $this->routeList[$requestedRoute]["controller"];
            $controller = new $controllerClass;

            $action = $this->routeList[$requestedRoute]["action"];
            $params = $this->currentRequest->getParams();

            $controller->$action(...$params);
        } else {
            echo "Ruta no existe";
        }
    }
}
