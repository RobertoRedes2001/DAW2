<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /*El componente route forma la url del programa, 
    por lo que acceder a la funcion se vuelve más simple*/
    #[Route('/lucky/number')]
    public function number(): Response //Response es un objeto el cual se envia al navegador
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    #[Route('/lucky/frase')]
    public function frase(): Response
    {
        $frase = "El que se fue a sevilla...";

        return new Response(
            '<html><body>'.$frase.'</body></html>'
        );
    }
}