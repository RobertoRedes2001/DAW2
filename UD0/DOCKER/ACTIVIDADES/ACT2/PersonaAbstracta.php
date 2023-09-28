<?php

abstract class PersonaAbstracta{
    //Propiedades
    private $nombre;
    private $edad;

    function getNombre(){
        return $this->nombre;
    }

    function getEdad(){
        return $this->edad;
    }

    function setEdad($x){
        $this->edad=$x;
    }

    //Metodo constructor
    public function __construct($nombre, $edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }

    //Metodo
    public function saludar(){
        echo "Hola, soy {$this->nombre} y tengo {$this->edad} años.";
    }
};

?>