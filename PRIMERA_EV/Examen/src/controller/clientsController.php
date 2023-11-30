<?php

namespace Examen\App\Controller;

class ClientsController {

    private $model;
    private $view;

    // Constructor que recibe el modelo y la vista como parámetros
    public function __construct($model, $view) {
        $this->model = $model;  
        $this->view = $view;   
    }

    // Método para obtener y mostrar todos los clientes
    public function getAllClients() {
        // Obtener todos los clientes del modelo
        $array = $this->model->findAll('CLIENTE');
        // Mostrar la tabla de clientes en la vista
        $this->view->allTable($array);
    }

    // Método para obtener y mostrar detalles de un cliente específico
    public function getDetailClient($id) {
        // Obtener detalles de un cliente específico del modelo
        $array = $this->model->find('CLIENTE','CLIENTE_COD',$id);
        // Mostrar la tabla de detalles del cliente en la vista
        $this->view->detailTable($array);
    }
    
}
?>
