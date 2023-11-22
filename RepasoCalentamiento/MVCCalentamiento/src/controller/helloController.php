<?php

namespace Roberto\App\Controller;

class helloController {

    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;  
        $this->view = $view;   
    }

    public function saludo() {
        $hora = $this->model->getHora();
        $this->view->saludar($hora);
    }

}
?>