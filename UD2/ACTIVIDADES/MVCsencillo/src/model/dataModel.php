<?php
class dataModel{
    private $database;
    private $username;
    private $password;
    private $dbname;
    
    public function __construct(){
        $database=  file_get_contents("../config/config.json");
        $config = json_decode($database, true);
        $this->database = $config["host"];
        $this->username = $config["username"];
        $this->password = $config["password"];
        $this->dbname = $config["dbname"];
        $this->openConection($this->database, $this->username, $this->password,$this->dbname);
    }

    public function openConection($db, $username, $password,$dbname){
        $conexion = new mysqli($db, $username, $password,$dbname);
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }
        echo 'todo ok';
    }

    public function claseConection($conexion){
        $conexion->close();
    }  
}
?>