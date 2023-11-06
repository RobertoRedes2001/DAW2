<?php
require_once('../src/controllers/listControler.php');
require_once('../src/controllers/detailControler.php');
require_once('../src/core/DataBase.php');
require_once('../src/models/listModel.php');
require_once('../src/models/detailModel.php');
require_once('../src/views/detailView.php');
require_once('../src/views/listView.php');

// Inicializamos el modelo, la vista y el controlador
$conexion = new DataBase();
$consultarTodos = new listModel();
$consultarUno = new listModel();
$tablaTodos = new listView();
$tablaUno = new detailView();
$listaControlador = new listController($consultarTodos,$tablaTodos);
$detalleControlador = new detailController($consultarUno,$tablaUno);

// Obtener la ruta actual desde la URL
//arreglar la ruta, no coge el valor de la ruta, siempre va al valor false
$route = isset($_GET['route']) ? $_GET['route'] : 'list';

echo "<br>";

switch ($route) {
    case 'list':
        //Conseguimos todos los registros
        $conexion->getInstance();
        $listaControlador->getList();
        break;
    case 'detail':
        //Sacamos el numero del registro si es que existe, si no devolvemos 1
        $number = isset($_GET['number']) ? $_GET['number'] : 1;
        //Conseguimos el registro y lo pasamos por pantalla
        $conexion->getInstance();
        $detalleControlador->getDetail($number);
        break;
    default:
        echo "Ruta no válida.";
}
