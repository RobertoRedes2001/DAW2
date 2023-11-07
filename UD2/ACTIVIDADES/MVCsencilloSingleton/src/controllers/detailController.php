<?php
class detailController {
# Declara dos propiedades privadas llamadas "model" y "view" que almacenan objetos pasados como argumentos al constructor.
private $model;
private $view;

# El constructor toma dos argumentos: $model y $view, que se utilizan para inicializar las propiedades correspondientes de la instancia.
public function __construct($model, $view) {
    $this->model = $model;  
    $this->view = $view;   
}

public function getDetail($number) {
    $array = $this->model->getOne($number);
    $this->view->detailTabla($array);
}
    
}
?>