<?php

abstract class Trabajador{
    //Propiedades
    private $nombre;
    private $sueldo;


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