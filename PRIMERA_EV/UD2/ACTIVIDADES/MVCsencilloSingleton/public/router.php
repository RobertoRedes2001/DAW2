<?php
require_once('../src/controllers/listController.php');
require_once('../src/controllers/detailController.php');
require_once('../src/models/listModel.php');
require_once('../src/models/detailModel.php');
require_once('../src/views/detailView.php');
require_once('../src/views/listView.php');
require_once('../src/core/DataBase.php');

// Inicializamos el modelo, la vista y el controlador
$consultarTodos = new listModel();
$tablaTodos = new listView();
$listaControlador = new listController($consultarTodos,$tablaTodos);

$consultarUno = new detailModel();
$tablaUno = new detailView();
$detalleControlador = new detailController($consultarUno,$tablaUno);

// Obtener la ruta actual desde la URL
//arreglar la ruta, no coge el valor de la ruta, siempre va al valor false
$route = isset($_GET['route']) ? $_GET['route'] : 'list';

echo "<br>";

switch ($route) {
    case 'list':
        //Conseguimos todos los registros
        $listaControlador->getList();
        break;
    case 'detail':
        //Sacamos el numero del registro si es que existe, si no devolvemos 1
        $number = isset($_GET['number']) ? $_GET['number'] : 1;
        //Conseguimos el registro y lo pasamos por pantalla
        $detalleControlador->getDetail($number);
        break;
    default:
        echo "Ruta no válida.";
}