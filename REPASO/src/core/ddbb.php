<?php

namespace Roberto\App\Core;

class ddbb{

    private static $instance = null;
    private $connection;

    private function __construct() {
        // Recogemos los datos del archivo config
        $database = file_get_contents("../config/config.json");
        $config = json_decode($database, true);
        $host = $config["host"];
        $username = $config["username"];
        $password = $config["password"];
        $dbname = $config["dbname"];

        // Abrimos la conexión
        try {
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
            $this->connection = new \PDO($dsn, $username, $password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("<br>Error de conexión: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        // Verifica si ya hay una instancia existente
        if (self::$instance === null) {
            // Si no existe una instancia, crea una nueva
            self::$instance = new ddbb();
        }
        // Devuelve la instancia existente o recién creada
        return self::$instance;
    }
    
    public function getConnection() {
        // Devuelve la conexión a la base de datos
        return $this->connection;
    }
}

?>