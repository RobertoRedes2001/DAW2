<?php

namespace App\Core;

use App\Core\Interfaces\IRequest;
use App\Core\Interfaces\IRoutes;

class Dispatcher
{
    private $routeList;
    private IRequest $currentRequest;

    // Constructor de la clase
    public function __construct(IRoutes $routeCollection, IRequest $request)
    {
        // Obtener la lista de rutas del objeto de colección de rutas
        $this->routeList = $routeCollection->getRoutes();
        
        // Obtener la solicitud actual
        $this->currentRequest = $request;

        // Despachar la solicitud
        $this->dispatch();
    }

    // Método para despachar la solicitud
    private function dispatch()
    {
        //echo $this->currentRequest->getRoute();
        // Verificar si la ruta solicitada existe en la lista de rutas
        if (isset($this->routeList[$this->currentRequest->getRoute()])) {
            // Construir el nombre de la clase del controlador
            $controllerClass = "App\\Controllers\\" . $this->routeList[$this->currentRequest->getRoute()]["controller"];
            
            // Crear una instancia del controlador
            $controller = new $controllerClass;

            // Obtener el nombre del método de acción desde la lista de rutas
            $action = $this->routeList[$this->currentRequest->getRoute()]["action"];

            // Llamar al método de acción del controlador con los parámetros de la solicitud
            $controller->$action(...$this->currentRequest->getParams());
        } else {
            // Si la ruta no existe, mostrar un mensaje
            echo "Ruta no existe";
        }
    }
}
