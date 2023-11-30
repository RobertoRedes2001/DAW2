<?php

namespace Roberto\App\View;

class listView{
    function viewTable(array $tareas) {
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>Título</th>';
        echo '<th>Descripción</th>';
        echo '<th>Fecha de Creación</th>';
        echo '<th>Fecha de Vencimiento</th>';
        echo '</tr>';
    
        foreach ($tareas as $tarea) {
            echo '<tr>';
            echo '<td>' . $tarea['titulo'] . '</td>';
            echo '<td>' . $tarea['descripcion'] . '</td>';
            echo '<td>' . $tarea['fecha_creacion'] . '</td>';
            echo '<td>' . $tarea['fecha_vencimiento'] . '</td>';
            echo '</tr>';
        }
    
        echo '</table>';
    }
}

?>