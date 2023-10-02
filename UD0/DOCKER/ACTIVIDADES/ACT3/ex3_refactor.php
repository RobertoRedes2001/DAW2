<?php

interface Shape
{
    public function calculateArea();
    public function getType();
    public function draw();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function getType()
    {
        return "Circle";
    }

    public function draw()
    {
        // Lógica para dibujar un círculo
    }
}

class Square implements Shape
{
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function calculateArea()
    {
        return $this->side * $this->side;
    }

    public function getType()
    {
        return "Square";
    }

    public function draw()
    {
        // Lógica para dibujar un cuadrado
    }
}

class AreaCalculator
{
    public function calculateArea(array $shapes)
    {
        $area = 0;
        foreach ($shapes as $shape) {
            $area += $shape->calculateArea();
        }
        echo "Total area = " . $area;
    }
}
