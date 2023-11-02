<?php
class dataModel{

    public function openConection(){
        //recogemos los datos del fichero config
        $database=  file_get_contents("../config/config.json");
        $config = json_decode($database, true);
        $host = $config["host"];
        $username = $config["username"];
        $password = $config["password"];
        $dbname = $config["dbname"];
        //abrimos la conexion
        $conexion = new mysqli($host, $username, $password,$dbname);
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }
        //retornamos la conexion
        return $conexion;
    } 
}
?>