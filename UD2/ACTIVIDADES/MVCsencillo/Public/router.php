<?php
require_once('../src/controllers/controler.php');
require_once('../src/models/dataModel.php');
require_once('../src/models/listModel.php');
require_once('../src/views/listView.php');

// Inicializamos el modelo, la vista y el controlador
$conexion = new dataModel();
$consulta = new listModel();
$tabla = new listView();
$controlador = new controller($consulta,$tabla);

// Obtener la ruta actual desde la URL
//arreglar la ruta, no coge el valor de la ruta, siempre va al valor false
$route = isset($_GET['route']) ? $_GET['route'] : 'list';

echo "<br>";

switch ($route) {
    case 'list':
        //Conseguimos todos los registros
        $conexion->openConection();
        $array = $consulta->getAll();
        $tabla->listTabla($array);
        break;
    case 'detail':
        //Sacamos el numero del registro si es que existe, si no devolvemos 1
        $number = isset($_GET['number']) ? $_GET['number'] : 1;
        //Conseguimos el registro y lo pasamos por pantalla
        $conexion->openConection();
        $array = $consulta->getOne($number);
        $tabla->listTabla($array);
        break;
    default:
        echo "Ruta no válida.";
}
