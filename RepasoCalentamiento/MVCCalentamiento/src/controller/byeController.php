<?php

namespace Roberto\App\Controller;

class byeController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function despedida() {
        $hora = $this->model->getHora();
        $this->view->despedirse($hora);
    }
}
?>