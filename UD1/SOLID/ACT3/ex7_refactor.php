<?php

//Interfaz que genera las funciones basicas de una puerta
interface Door
{
    public function lock();
    public function unlock();
    public function open();
    public function close();
}

//Interfaz para una puerta con sensor
interface SensorClient
{
    public function proximityCallback();
}

//Interfaz para una puerta con temporizador
interface TimerClient
{
    public function timeOutCallback();
}

//Clase que añade la logica del sensor
class Sensor
{
    public function register(SensorClient $door)
    {
        while (true) {
            if ($this->isPersonClose()) {
                $door->proximityCallback();
                break;
            }
        }
    }

    private function isPersonClose()
    {
        return random_int(0,1);
    }
}

//La clase implementa la logica de la puerta y el sensor
class SensingDoor implements Door,SensorClient
{
    private $locked;
    private $opened;

    function __construct(Sensor $sensor)
    {
        $sensor->register($this);
    }

    public function lock()
    {
        $this->locked = true;
    }

    public function unlock()
    {
        $this->locked = false;
    }

    public function open()
    {
        if (!$this->locked) {
            $this->opened = true;
        }
    }

    public function close()
    {
        $this->opened = false;
    }

    public function proximityCallback()
    {
        $this->opened = true;
    }
}

//Clase que añade la logica del temporizador
class Timer
{
    public function register($timeOut, TimerClient $door)
    {
        sleep($timeOut);
        $door->timeOutCallback();
    }
}

//La clase implementa la logica de la puerta y el temporizador
class TimedDoor implements Door,TimerClient
{
    const TIME_OUT = 10;
    private $locked;
    private $opened;

    function __construct(Timer $timer)
    {
        $timer->register(self::TIME_OUT, $this);
    }

    public function lock()
    {
        $this->locked = true;
    }

    public function unlock()
    {
        $this->locked = false;
    }

    public function open()
    {
        if (!$this->locked) {
            $this->opened = true;
        }
    }

    public function close()
    {
        $this->opened = false;
    }

    public function timeOutCallback()
    {
        $this->locked = true;
    }
}