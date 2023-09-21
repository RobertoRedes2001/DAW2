<?php

class Estudiante extends Persona{
    //Propiedades
    private $curso;

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }
     
    //Metodo constructor
    public function __construct($nombre,$edad,$curso){
        parent::__construct($nombre,$edad);
        $this->curso = $curso;
    }

    //Metodo
    public function estudiar(){
        echo "{$this->getNombre()} está estudiando el curso de $this->curso en Florida Universitaria.";
    }
};

?>