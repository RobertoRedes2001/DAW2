<?php

namespace Roberto\App\Controller;

class sayingController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;  
        $this->view = $view;    
    }   

    public function leerRefranes() {
        $refran = $this->model->getSayings();
        $this->view->readSaying($refran);
    }
}
?>