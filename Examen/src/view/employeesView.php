<?php

namespace Examen\App\View;

class EmployeesView{
    // Método para generar una tabla HTML con todos los empleados
    function allTable(array $empleados) {
        echo '<table border="1">';
    
        foreach ($empleados as $empleado) {
            echo '<tr>';
            // Enlace a la vista de detalle para cada empleado, con el EMP_NO como parámetro
            echo '<td><a href="http://localhost/public/router.php/employeesdetail/'.$empleado["EMP_NO"].'">' . $empleado["APELLIDOS"]. '</a></td>';
            echo '<td>' . $empleado["OFICIO"] . '</td>';
            echo '</tr>';
        }
    
        echo '</table>';
        // Enlace al menú principal
        echo '<a href="http://localhost">Menú Principal</a>';
    }

    // Método para generar una tabla HTML con detalles de un empleado
    function detailTable(array $empleados) {
        echo '<table border="1">';
    
        foreach ($empleados as $empleado) {
            echo '<tr>';
            echo '<td>' . $empleado["EMP_NO"] . '</td>';
            echo '<td>' . $empleado["APELLIDOS"] . '</td>';
            echo '<td>' . $empleado["OFICIO"] . '</td>';
            echo '</tr>';
            echo '<tr>';
            // Detalles adicionales del empleado, como fecha de alta, salario, comisión, etc.
            echo '<td colspan="3"> FECHA ALTA: ' . $empleado["FECHA_ALTA"] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td colspan="3">SALARIO: ' . $empleado["SALARIO"] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td colspan="3">COMISIÓN: ' . $empleado["COMISION"] . '</td>';
            echo '</tr>';
        }
    
        echo '</table>';
        // Enlace para volver al listado de empleados
        echo '<a href="http://localhost/public/router.php/employees">Volver a Listado</a>';
    }
}

?>