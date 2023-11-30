<?php

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

    public function getArea()
    {
        return $this->width * $this->height;
    }
}

class Square 
{
    private $side;

    public function getArea()
    {
        return $this->side * 2;
    }
}