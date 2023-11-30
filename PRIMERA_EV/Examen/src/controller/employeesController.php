<?php

namespace Examen\App\Controller;

class EmployeesController {

    private $model;
    private $view;

    // Constructor que recibe el modelo y la vista como parámetros
    public function __construct($model, $view) {
        $this->model = $model;  
        $this->view = $view;   
    }

    // Método para obtener y mostrar todos los empleados
    public function getAllEmployees() {
        // Obtener todos los empleados del modelo
        $array = $this->model->findAll('EMP');
        // Mostrar la tabla de empleados en la vista
        $this->view->allTable($array);
    }

    // Método para obtener y mostrar detalles de un empleado específico
    public function getDetailEmployee($id) {
        // Obtener detalles de un empleado específico del modelo
        $array = $this->model->find('EMP','EMP_NO',$id);
        // Mostrar la tabla de detalles del empleado en la vista
        $this->view->detailTable($array);
    }
    
}
?>
