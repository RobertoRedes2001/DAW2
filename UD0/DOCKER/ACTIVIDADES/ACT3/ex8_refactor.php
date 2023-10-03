<?php
class Lamp
{
    public function turnOn()
    {
        echo "Lamp turned on";
    }

    public function turnOff()
    {
        echo "Lamp turned off";
    }
}

class Button
{
    private Lamp $lamp;
    private $state;

    function __construct(Lamp $lamp)
    {
        $this->lamp = $lamp;
    }

    public function toggle()
    {
        $this->state = !$this->state;
        $buttonOn = $this->state;
        if ($buttonOn) {
            $this->lamp->turnOn();
        } else {
            $this->lamp->turnOff();
        }
    }

}