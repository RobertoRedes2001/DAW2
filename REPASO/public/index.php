<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '../vendor/autoload.php';

use Roberto\App\Model\dataModel;
use Roberto\App\Controller\dataController;
use Roberto\App\Core\ddbb; 
use Roberto\App\View\dataView; 

$db = new ddbb();
$model = new dataModel();
$controller = new dataController();
$view = new dataView();

$db->saludo();
echo "<br>";
$model->saludo();
echo "<br>";
$controller->saludo();
echo "<br>";
$view->saludo();

?>