<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '../vendor/autoload.php';

use Examen\App\Model\ClientsModel;
use Examen\App\View\ClientsView; 
use Examen\App\Controller\ClientsController;

use Examen\App\Model\EmployeesModel;
use Examen\App\View\EmployeesView;
use Examen\App\Controller\EmployeesController;

$cliModel = new ClientsModel();
$cliView = new ClientsView();
$cliController = new ClientsController($cliModel, $cliView);

$empModel = new EmployeesModel();
$empView = new EmployeesView();
$empController = new EmployeesController($empModel, $empView);

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
    case 'clients':
        // Conseguimos todos los registros
        $cliController->getAllClients();
        break;
    case 'clientsdetail':
        // Verificar si hay un parámetro de ID después de 'clientsdetail/'
        if (isset($params[0])) {
            $clientId = $params[0];
            $cliController->getDetailClient($clientId);
        } else {
            echo "Falta el ID del cliente en la ruta /clientsdetail/x";
        }
        break;
    case 'employees':
        // Conseguimos todos los registros
        $empController->getAllEmployees();
        break;
    case 'employeesdetail':
        // Verificar si hay un parámetro de ID después de 'employeesdetail/'
        if (isset($params[0])) {
            $empId = $params[0];
            $empController->getDetailEmployee($empId);
        } else {
            echo "Falta el ID del cliente en la ruta /employeesdetail/x";
        }
        break;
    default:
        echo "Ruta no válida.";
        echo "<br>";
        echo "Usa la ruta /list";
}