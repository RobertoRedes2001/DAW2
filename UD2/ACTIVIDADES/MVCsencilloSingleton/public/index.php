<?php
    #http://localhost/public/router.php?route=list
    #http://localhost/public/router.php?route=detail&number=1

    # La función header() se utiliza para enviar una respuesta HTTP y, en este caso, 
    # una cabecera de "Location" que redirige a otra página.
    # La variable $_SERVER['QUERY_STRING'] contiene la cadena de consulta original de la URL actual, 
    #incluyendo los parámetros y sus valores. 
    header("Location: router.php".'?'.$_SERVER['QUERY_STRING']);
    exit;
?>