<?php

//CASO: SRP
//Clase pato que nada o cuaquea
class Duck
{
    public function quack()
    {
        echo "Quack...";
    }

    public function swim()
    {
        echo "Swim...";
    }
}

//Clase Pato Electronico que se enciende o apaga y funciona en funcion a esta propiedad
class ElectronicDuck extends Duck
{
    private $on = false;

    public function quack()
    {
        if ($this->on) {
            echo "Electronic duck quack...";
        } else {
            throw new RuntimeException("Can't quack when off");
        }
    }

    public function swim()
    {
        if ($this->on) {
            echo "Electronic duck swim";
        } else {
            throw new RuntimeException("Can't swim when off");
        }
    }

    //Enciende el pato
    public function turnOn()
    {
        $this->on = true;
    }

    //Apaga el pato
    public function turnOff()
    {
        $this->on = false;
    }
}

//Manejador de patos para controlar las funciones 
class DuckManager
{
    public function quack(Duck $duck)
    {
        $duck->quack();
    }

    public function swim(Duck $duck)
    {
        $duck->swim();
    }
}

//Piscina donde se despliegan los patos
class Pool
{
    private $duckManager;

    public function __construct()
    {
        $this->duckManager = new DuckManager();
    }

    //Pone a los patos a nadar y cuaquear
    public function run()
    {
        $donaldDuck = new Duck();
        $electricDuck = new ElectronicDuck();
        
        $this->duckManager->quack($donaldDuck);
        $this->duckManager->swim($donaldDuck);

        //Enciende los patos electricos antes de ponerlos a nadar
        $electricDuck->turnOn();
        $this->duckManager->quack($electricDuck);
        $this->duckManager->swim($electricDuck);
    }
}
