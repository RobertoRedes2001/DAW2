<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '../vendor/autoload.php';

use Roberto\App\Model\dataModel;
use Roberto\App\Controller\dataController;
use Roberto\App\View\dataView; 

$model = new dataModel();
$view = new dataView();
$controller = new dataController($model, $view);

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
        $controller->getList();
        break;
    default:
        echo "Ruta no válida.";
        echo "<br>";
        echo "Usa la ruta /list";
}
