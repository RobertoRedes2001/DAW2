<?php

//Define interfaz para trabajar
interface Worker
{
    public function work();
}

//Define interfaz para comer
interface Eater {
    public function eat();
}

//Carga un array de trabajadores para que trabajen
class Factory
{
    private $workers = [];

    function __construct(array $workers)
    {
        $this->workers = $workers;
    }

    public function manage()
    {
        foreach ($this->workers as $worker) {
            $worker->work();
        }
    }

}

//Carga un array de trabajadores para que coman
class MessHall
{
    private $workers = [];

    function __construct(array $workers)
    {
        $this->workers = $workers;
    }

    public function manage()
    {
        foreach ($this->workers as $worker) {
            $worker->eat();
        }
    }

}

class Human implements Worker, Eater
{
    public function work()
    {
        return "Human works";
    }

    public function eat()
    {
        return "Human eats";
    }
}

//El robot implementa solo Worker, porque los robots no comen
class Robot implements Worker
{
    public function work()
    {
        return "Robot works";
    }
}