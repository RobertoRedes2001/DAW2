<?php
class byeModel {
    private $time;

    public function __construct() {
        // Simulamos datos iniciales
        $this->time = date("H:i:s");
    }

    public function getHora() {
        return $this->time;
    }
}
?>