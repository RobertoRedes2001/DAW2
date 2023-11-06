<?php
class listModel{

    public function getAll(){  

        $model = DataBase::getInstance(); // Usar el Singleton para obtener la instancia
        $connection = $model->getConnection(); // Obtener la conexión

        //hacemos la consulta
        $sql = "SELECT * FROM tareas";
        $result = $connection->query($sql);

        //si recoge resultados, los guardamos en un array
        if ($result) {
            if ($result->num_rows > 0) {
                $tareas = array(); // Inicializar un array vacío para almacenar las tareas
                while ($row = $result->fetch_assoc()) {
                    $tareas[] = $row; // Agregar la tarea al array de tareas
                }
                return $tareas;
            } else {
                //mensaje en caso de que no hayan registros
                echo "No se encontraron registros en la tabla 'tareas'.";
            }
        } else {
            //mensaje en caso de que haya error
            echo "Error en la consulta: " . $connection->error;
        }
            //cerramos la conexion
            $connection->close();
        }
}

?>