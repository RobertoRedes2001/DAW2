<?php

//CASO: SRP
//Clase que crea un Rectangulo con sus atributos y metodos
class Rectangle
{
    private $width;
    private $height;

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    //Calcula el area
    public function getArea()
    {
        return $this->width * $this->height;
    }
}

//Clase que crea un Cuadrado con sus atributos y metodos
class Square 
{
    private $side;

    //Calcula el area
    public function getArea()
    {
        return $this->side * 2;
    }
}