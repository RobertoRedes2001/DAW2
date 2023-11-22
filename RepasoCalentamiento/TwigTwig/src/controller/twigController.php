<?php

namespace Twig\App\Controller;

class TwigController{

    private $modelo;
    private $vista;

    public function __construct($modelo, $vista){

        $this->modelo = $modelo;
        $this->vista = $vista;

    }

    public function mostrarTodo(){
        
        $array=$this->modelo->getAll();
        $this->vista->mostrar($array);
    }


}