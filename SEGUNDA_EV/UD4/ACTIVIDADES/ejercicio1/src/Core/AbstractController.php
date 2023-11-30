<?php

namespace App\Core;

use App\Core\SessionManager;

abstract class AbstractController
{
    private $twig;
    protected $sessionManager;

    // Constructor de la clase
    public function __construct()
    {
        // Configurar el cargador de archivos del sistema de plantillas Twig
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../../templates');

        // Inicializar el entorno Twig
        $this->twig = new \Twig\Environment($loader);
    }

    // Método para renderizar una plantilla Twig con parámetros
    public function render($template, $params)
    {
        // Cargar la plantilla
        $template = $this->twig->load($template);

        // Renderizar la plantilla con los parámetros proporcionados
        echo $template->render($params);
    }
}
