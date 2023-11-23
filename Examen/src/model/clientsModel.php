<?php

namespace Examen\App\Model;

require_once '../vendor/autoload.php'; // Incluyes el archivo de autoloader de Composer

use Examen\App\Core\DataBase; // Importas la clase DataBase del namespace especificado

class ClientsModel
{
    public function getAll()
    {
        $model = DataBase::getInstance(); // Obtienes una instancia de la clase DataBase mediante un método estático
        $connection = $model->getConnection(); // Obtienes la conexión a la base de datos

        // Consulta SQL para obtener todos los registros de la tabla CLIENTE
        $sql = "SELECT * FROM CLIENTE";
        
        try {
            $stmt = $connection->query($sql); // Ejecutas la consulta SQL

            if ($stmt !== false) {
                $clientes = $stmt->fetchAll(\PDO::FETCH_ASSOC); // Obtiene todos los registros como un array asociativo

                if ($clientes !== false) {
                    return $clientes; // Devuelve los registros
                } else {
                    echo "No se encontraron registros en la tabla 'clientes'.";
                }
            } else {
                $errorInfo = $connection->errorInfo();
                echo "Error en la consulta: " . implode(" ", $errorInfo); // Muestra el error si la consulta falla
            }
        } catch (\PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage(); // Captura y muestra errores de PDO
        } finally {
            // Siempre liberar los recursos al finalizar
            $stmt = null;
            $connection = null;
        }
    }

    public function getOne($id)
    {
        $model = DataBase::getInstance(); // Obtienes una instancia de la clase DataBase mediante un método estático
        $connection = $model->getConnection(); // Obtienes la conexión a la base de datos

        // Consulta SQL para obtener un registro específico de la tabla CLIENTE
        $sql = "SELECT * FROM CLIENTE WHERE CLIENTE_COD='$id'";
        
        try {
            $stmt = $connection->query($sql); // Ejecutas la consulta SQL

            if ($stmt !== false) {
                $tareas = $stmt->fetchAll(\PDO::FETCH_ASSOC); // Obtiene todos los registros como un array asociativo

                if ($tareas !== false) {
                    return $tareas; // Devuelve los registros
                } else {
                    echo "No se encontraron registros en la tabla 'tareas'.";
                }
            } else {
                $errorInfo = $connection->errorInfo();
                echo "Error en la consulta: " . implode(" ", $errorInfo); // Muestra el error si la consulta falla
            }
        } catch (\PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage(); // Captura y muestra errores de PDO
        } finally {
            // Siempre liberar los recursos al finalizar
            $stmt = null;
            $connection = null;
        }
    }
}
?>
