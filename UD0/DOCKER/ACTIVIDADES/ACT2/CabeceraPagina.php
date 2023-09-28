<?php

class CabeceraPagina{
    //Propiedades
    private $titulo;
    private $posicion;
    private $color;
    private $backgroundColor;

    //Metodo constructor
    public function __construct($titulo,$posicion,$color,$backgroundColor){
        $this->titulo=$titulo;
        $this->posicion=$posicion;
        $this->color=$color;
        $this->backgroundColor=$backgroundColor;
    }

    //Metodo
    public function encabezado(){
       echo "<h1 align='$this->posicion' style='color:$this->color;background-color:$this->backgroundColor'> {$this->titulo}</h1>";
    }

};

?>