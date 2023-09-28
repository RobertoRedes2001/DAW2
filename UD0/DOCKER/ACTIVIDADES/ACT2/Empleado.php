<?php

class Empleado{
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
        if(is_null($sueldo) || $sueldo<1000){
            $this->sueldo=1000;
        }else{
            $this->sueldo=$sueldo;
        }
        
        
    }

    //Metodo
    public function taxes(){
        if($this->getSueldo()>3000){
            echo "Nombre: {$this->getNombre()}";
            echo "<br>";
            echo "¡PAGA IMPUESTOS O VETE A ANDORRA!";
        }else{
            echo "Nombre: {$this->getNombre()}";
            echo "<br>";
            echo "No paga impuestos.";
        }
    }

    public function taxesConSueldo(){
        if($this->getSueldo()>3000){
            echo "Nombre: {$this->getNombre()}";
            echo "<br>";
            echo "Sueldo: {$this->getSueldo()}";
            echo "<br>";
            echo "¡PAGA IMPUESTOS O VETE A ANDORRA!";
        }else{
            echo "Nombre: {$this->getNombre()}";
            echo "<br>";
            echo "Sueldo: {$this->getSueldo()}";
            echo "<br>";
            echo "No paga impuestos.";
        }
    }
};

?>