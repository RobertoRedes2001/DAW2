<?php

class OtroEmpleado extends PersonaAbstracta{
    //Propiedades
    private $sueldo;

    //Metodo constructor
    public function __construct($nombre, $edad, $sueldo){
        parent::__construct($nombre,$edad);
        $this->sueldo = $sueldo;
    }

    //Metodo
    public function saludar()
    {
        echo "Nombre: {$this->getNombre()}"; 
        echo "<br>";
        echo "Edad: {$this->getEdad()}"; 
        echo "<br>";
        echo "Sueldo: $this->sueldo"; 
    }

    public function miSueldo(){
        echo "Sueldo: $this->sueldo";
    }
};

?>