<?php

class Gerente extends Trabajador{
    //Propiedades
    private $horasTrabajadas;
    private $valorHoras;

    //Metodo constructor
    public function __construct($nombre, $sueldo, $horasTrabajadas){
        parent::__construct($nombre,$sueldo);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->valorHoras = 3.5;
    }

    //Metodo
    public function calcularSueldo()
    {
        $sueldo = $this->valorHoras*$this->horasTrabajadas;
        return $sueldo+($sueldo*0.10);
    }
};

?>