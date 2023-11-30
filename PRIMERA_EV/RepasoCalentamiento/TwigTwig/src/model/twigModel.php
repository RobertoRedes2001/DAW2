<?php

namespace Twig\App\Model;

require_once './vendor/autoload.php';

use Twig\App\Core\DataBase;

class TwigModel
{
    public function getAll()
    {
        $model = DataBase::getInstance();
        $connection = $model->getConnection();
        $sql = "SELECT * FROM registros";
        
        try {
            $stmt = $connection->query($sql);

            if ($stmt !== false) {
                $tareas = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                if ($tareas !== false) {
                    return $tareas;
                } else {
                    echo "No se encontraron registros en la tabla 'tareas'.";
                }
            } else {
                $errorInfo = $connection->errorInfo();
                echo "Error en la consulta: " . implode(" ", $errorInfo);
            }
        } catch (\PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
        } finally {
            // Siempre liberar los recursos
            $stmt = null;
            $connection = null;
        }
    }
}
?>
