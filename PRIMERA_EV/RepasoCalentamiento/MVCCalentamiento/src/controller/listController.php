<?php

namespace Roberto\App\Controller;

class listController {

    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;  
        $this->view = $view;   
    }

    public function getList() {
        $array = $this->model->getAll();
        $this->view->viewTable($array);
    }
    
}
?>