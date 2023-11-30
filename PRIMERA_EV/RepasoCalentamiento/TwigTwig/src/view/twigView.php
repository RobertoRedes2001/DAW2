<?php

namespace Twig\App\View;

class TwigView {

    public function mostrar($array){

        require "./vendor/autoload.php";
        $loader=new \Twig\Loader\FilesystemLoader("templates");
        $twig=new \Twig\Environment($loader);
        foreach ($array as $user) {
            echo $twig->render("index.html",["nombre"=>$user["nombre"], "apellidos"=>$user["apellidos"]]);
        }
        

    }
}


?>