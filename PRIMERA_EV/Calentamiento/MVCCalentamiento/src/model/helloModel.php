<?php
class helloModel {
    # Declaración de una propiedad privada llamada "time" para almacenar la hora.
    private $time;
    
    # Constructor de la clase.
    public function __construct() {
        # Establece la zona horaria predeterminada a "Europe/Madrid".
        date_default_timezone_set('Europe/Madrid');
        
        # Obtiene la hora actual en el formato "H:i:s" (horas:minutos:segundos) 
        #y la almacena en la propiedad "time".
        $this->time = date("H:i:s");
    }
    
    # Método público llamado "getHora" que devuelve la hora almacenada en la propiedad "time".
    public function getHora() {
        return $this->time;
    }
}
?>