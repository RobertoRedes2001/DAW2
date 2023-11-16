<?php
class byeController {
# Declara dos propiedades privadas llamadas "model" y "view" que almacenan objetos pasados como argumentos al constructor.
private $model;
private $view;

# El constructor toma dos argumentos: $model y $view, que se utilizan para inicializar las propiedades correspondientes de la instancia.
public function __construct($model, $view) {
    $this->model = $model;  # Asigna el objeto $model a la propiedad "model" de la instancia.
    $this->view = $view;    # Asigna el objeto $view a la propiedad "view" de la instancia.
}

public function despedida() {
    # Llamamos al getHora de Model y se lo pasamos al Despedirse de View
    $hora = $this->model->getHora();
    $this->view->despedirse($hora);
}
}
?>