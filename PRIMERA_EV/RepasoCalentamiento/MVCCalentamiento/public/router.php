<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '../vendor/autoload.php';

use Roberto\App\Model\listModel;
use Roberto\App\View\listView; 
use Roberto\App\Controller\listController;

use Roberto\App\Model\helloModel;
use Roberto\App\View\helloView; 
use Roberto\App\Controller\helloController;

use Roberto\App\Model\byeModel;
use Roberto\App\View\byeView; 
use Roberto\App\Controller\byeController;

use Roberto\App\Model\sayingModel;
use Roberto\App\View\sayingView; 
use Roberto\App\Controller\sayingController;

$listModel = new listModel();
$listView = new listView();
$listController = new listController($listModel, $listView);

$byeModel = new byeModel();
$byeView = new byeView();
$byeController = new byeController($byeModel, $byeView);

$helloModel = new helloModel();
$helloView = new helloView();
$helloController = new helloController($helloModel, $helloView);

$sayingModel = new sayingModel();
$sayingView = new sayingView();
$sayingController = new sayingController($sayingModel, $sayingView);

// Obtener la ruta actual desde la URL
$requestUri = $_SERVER['REQUEST_URI'];
// Eliminar la parte del script (por ejemplo, /public/router.php)
$requestUri = str_replace('/public/router.php', '', $requestUri);
// Eliminar barras diagonales adicionales al principio y al final
$requestUri = trim($requestUri, '/');
// Obtener partes de la URL divididas por '/'
$parts = explode('/', $requestUri);
// Usar la primera parte como la ruta
$route = isset($parts[0]) ? $parts[0] : 'default';
// Resto de partes podrían ser parámetros adicionales
$params = array_slice($parts, 1);

switch ($route) {
    case 'list':
        // Conseguimos todos los registros
        $listController->getList();
        break;
    case 'bye':
        // Conseguimos todos los registros
        $byeController->despedida();
        break;
    case 'hello':
        // Conseguimos todos los registros
        $helloController->saludo();
        break;
    case 'saying':
        // Conseguimos todos los registros
        $sayingController->leerRefranes();
        break;
    default:
        echo "Ruta no válida.";
        echo "<br>";
        echo "Usa la ruta /list";
}