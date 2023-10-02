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
    //Si el sueldo es null o menor a 1000 se le asigna 1000 por defecto
    public function __construct($nombre, $sueldo){
        $this->nombre=$nombre;
        if(is_null($sueldo) || $sueldo<1000){
            $this->sueldo=1000;
        }else{
            $this->sueldo=$sueldo;
        }
    }

    //Metodo
    //Indica si debe pagar impuestos o no en funcion del sueldo
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

    //Adicion de taxes(): Informa del sueldo del empleado
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