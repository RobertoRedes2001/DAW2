<?php

namespace Roberto\App\Core;

class RouteCollection
{
    private $routes;

    public function __construct()
    {
        $filePath = "../config/routes.json";
        if (file_exists($filePath)) {
            $this->routes = json_decode(file_get_contents($filePath), true);
        } else {
            // Manejar el caso en el que el archivo no existe
            echo "El archivo routes.json no se encuentra en la ruta especificada.";
            echo "<br>" . $filePath;
        }
    }

    /**
     * Get the value of routes
     */
    public function getRoutes()
    {
        return $this->routes;
    }
}
