<?php
class listController {
# Declara dos propiedades privadas llamadas "model" y "view" que almacenan objetos pasados como argumentos al constructor.
private $model;
private $view;

# El constructor toma dos argumentos: $model y $view, que se utilizan para inicializar las propiedades correspondientes de la instancia.
public function __construct($model, $view) {
    $this->model = $model;  
    $this->view = $view;   
}

public function getList() {
    $array = $this->model->getAll();
    $this->view->listTabla($array);
}
    
}
?>