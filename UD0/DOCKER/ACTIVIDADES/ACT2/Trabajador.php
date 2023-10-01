<?php

abstract class Trabajador{
    //Propiedades
    private $nombre;
    private $sueldo;

    public function getNombre(){
        return $this->nombre;
    }

    public function getSueldo(){
        return $this->sueldo;
    }

    //Metodo constructor
    public function __construct($nombre, $sueldo){
        $this->nombre=$nombre;
        $this->sueldo=$sueldo;
    }

    //Metodo
    public function calcularSueldo(){
        
    }

    public function saludar(){
        echo "Hola, soy {$this->nombre} y cobro {$this->sueldo}€.";
    }
};

?>