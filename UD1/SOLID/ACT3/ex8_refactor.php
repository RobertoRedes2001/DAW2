<?php
//Clase que maneja la logica de la lampara
class Lamp
{
    //Se enciende la lampara
    public function turnOn()
    {
        echo "Lamp turned on";
    }

    //Se apaga la lampara
    public function turnOff()
    {
        echo "Lamp turned off";
    }
}

//Clase que maneja la logica del boton
class Button
{
    private Lamp $lamp;
    private $state;

    function __construct(Lamp $lamp)
    {
        $this->lamp = $lamp;
    }

    /**Al pulsarse el boton se acciona
     * la funcion de apagar o encender la 
     * lampara dependiendo del estado de este
     */
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