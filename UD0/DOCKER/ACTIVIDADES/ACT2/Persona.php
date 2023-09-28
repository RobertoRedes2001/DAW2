<?php

class Persona{
    //Propiedades
    private $nombre;
    protected static $edad = 21;

    function setEdad($x){
        $this->edad=$x;
    }

    function getNombre(){
        return $this->nombre;
    }

    static function getEdad(){
        return self::$edad;
    }

    //Metodo constructor
    public function __construct($nombre){
        $this->nombre=$nombre;
        self::$edad++;
    }

    //Metodo
    public function saludar(){
        echo "Hola, soy {$this->nombre} y tengo {$this->getEdad()} años.";
    }
};

?>