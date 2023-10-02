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
    //Retorna el sueldo en base a las horas trabajadas + 10% adicional
    public function calcularSueldo()
    {
        $sueldo = $this->valorHoras*$this->horasTrabajadas;
        return $sueldo+($sueldo*0.10);
    }
};

?>