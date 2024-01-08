<?php
// src/Controller/coinController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class coinController
{
    /*El componente route forma la url del programa, 
    por lo que acceder a la funcion se vuelve más simple*/
    #[Route('/side')]
    public function flipCoin(): Response //Response es un objeto el cual se envia al navegador
    {
        $cara = random_int(0, 1);

        return new Response(
            '<html><body>Ha salido: '.(($cara) ? 'cara' : 'cruz'). '</body></html>'
        );
    }
}