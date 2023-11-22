<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once './vendor/autoload.php';

use Twig\App\Model\TwigModel;
use Twig\App\View\TwigView;
use Twig\App\Controller\TwigController;

$vista = new TwigView();
$modelo = new TwigModel();
$control = new TwigController($modelo,$vista);

$control->mostrarTodo();

?>