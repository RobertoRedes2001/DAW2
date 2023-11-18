<?php

namespace Roberto\App\Model;
require_once '../vendor/autoload.php';
use Roberto\App\Core\ddbb; 

class dataModel{
    public function getAll() {  
        $model = ddbb::getInstance(); // Usar el Singleton para obtener la instancia
        $connection = $model->getConnection(); // Obtener la conexión
        // Hacer la consulta utilizando PDO
        $sql = "SELECT * FROM tareas";
        try {
            $stmt = $connection->query($sql);
            if ($stmt) {
                $tareas = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                if ($tareas) {
                    return $tareas;
                } else {
                    // Mensaje en caso de que no hayan registros
                    echo "No se encontraron registros en la tabla 'tareas'.";
                }
            } else {
                // Mensaje en caso de que haya error
                echo "Error en la consulta: " . implode(" ", $connection->errorInfo());
            }
        } catch (\PDOException $e) {
            // Manejar la excepción de PDO
            echo "Error en la consulta: " . $e->getMessage();
        } finally {
            // Cerrar la conexión
            $connection = null;
        }
    }
}

?>