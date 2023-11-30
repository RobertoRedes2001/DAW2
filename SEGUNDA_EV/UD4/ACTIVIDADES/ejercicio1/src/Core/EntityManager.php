<?php

namespace App\Core;

use Doctrine\ORM\Tools\Setup;

class EntityManager
{
    private $em;
    private $dbConfig;

    // Constructor de la clase
    public function __construct()
    {
        // Obtener la configuración de la base de datos desde el archivo de configuración
        $this->dbConfig = json_decode(file_get_contents(__DIR__ . "/../../config/dbConfig.json"), true);

        // Rutas donde se encuentran las entidades
        $paths = [__DIR__.'/../Entity'];

        // Modo de desarrollo
        $isDevMode = true;

        // Parámetros de conexión a la base de datos
        $dbParams = [
            'host' => $this->dbConfig["server"],
            'driver' => $this->dbConfig["driver"],
            'user' => $this->dbConfig["user"],
            'password' => $this->dbConfig["password"],
            'dbname' => $this->dbConfig["dbname"],
        ];

        // Configuración de Doctrine ORM
        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);

        // Crear una instancia del EntityManager de Doctrine
        $this->em = \Doctrine\ORM\EntityManager::create($dbParams, $config);
    }

    // Método para obtener la instancia del EntityManager
    public function get()
    {
        return $this->em;
    }
}
