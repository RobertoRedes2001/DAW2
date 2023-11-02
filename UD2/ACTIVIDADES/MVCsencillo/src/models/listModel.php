<?php
class listModel{

    public function getAll(){  
        //abrimos la conexion en la lista
        $model = new dataModel();
        $connection = $model->openConection();

        //hacemos la consulta
        $sql = "SELECT * FROM tareas";
        $result = $connection->query($sql);

        //si recoge resultados, los guardamos en un array
        if ($result) {
            if ($result->num_rows > 0) {
                $tareas = array(); // Inicializar un array vacío para almacenar las tareas
                while ($row = $result->fetch_assoc()) {
                    $tarea = array(
                        "titulo" => $row["titulo"],
                        "descripcion" => $row["descripcion"],
                        "fecha_creacion" => $row["fecha_creacion"],
                        "fecha_vencimiento" => $row["fecha_vencimiento"]
                    );
                    $tareas[] = $tarea; // Agregar la tarea al array de tareas
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

        public function getOne($id){  
            //abrimos la conexion en la lista
            $model = new dataModel();
            $connection = $model->openConection();

            //hacemos la consulta
            $sql = "SELECT * FROM tareas WHERE id='$id'";
            $result = $connection->query($sql);
            
            //si recoge resultados, los guardamos en un array
            if ($result) {
                if ($result->num_rows > 0) {
                    $tareas = array(); // Inicializar un array vacío para almacenar las tareas
                    while ($row = $result->fetch_assoc()) {
                        $tarea = array(
                            "titulo" => $row["titulo"],
                            "descripcion" => $row["descripcion"],
                            "fecha_creacion" => $row["fecha_creacion"],
                            "fecha_vencimiento" => $row["fecha_vencimiento"]
                        );
                        $tareas[] = $tarea; // Agregar la tarea al array de tareas
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