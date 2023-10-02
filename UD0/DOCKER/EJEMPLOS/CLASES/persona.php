<?php

class Persona{
    //Propiedades
    private $nombre;
    private $edad;
    
    public function getNombre(){
        return $this->nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

    //Metodo constructor
    public function __construct($nombre, $edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }

    //Metodo
    public function saludar(){
        echo "Hola, soy {$this->getNombre()} y tengo {$this->getEdad()} años.";
    }
};

?>