<?php

/**Clase abstracta que sirve como estandar para cada clase 
 * que extienda de "Shape" */
//CASO: OCP
abstract class Shape
{
    protected ShapeType $shapeType;

    public function getType()
    {
        return $this->shapeType;
    }

    //Estandar de funcion para calcular el area de la forma
    public abstract function calculateArea();

}

//Define el tipo de forma
abstract class ShapeType
{
    const CIRCLE = 0;
    const SQUARE = 1;
}

class Circle extends Shape
{
    private $radius;

    public function Circle($radius)
    {
        $this->shapeType = ShapeType::CIRCLE;
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function calculateArea()
    {
        return pi() * $this->getRadius() * $this->getRadius();
    }
}

class Square extends Shape
{
    private $side;

    function __construct($side)
    {
        $this->shapeType = ShapeType::SQUARE;
        $this->side = $side;
    }

    public function getSide()
    {
        return $this->side;
    }

    public function calculateArea()
    {
        return $this->getSide() * $this->getSide();
    }
}