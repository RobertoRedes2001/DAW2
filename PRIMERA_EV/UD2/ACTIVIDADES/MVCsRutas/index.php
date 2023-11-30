<?php
#http://localhost/UD2/Actividades/router.php?=hello
#http://localhost/UD2/Actividades/router.php?=bye
#http://localhost/UD2/Actividades/router.php?=saying

# La función header() se utiliza para enviar una respuesta HTTP y, en este caso, 
# una cabecera de "Location" que redirige a otra página.
# La variable $_SERVER['QUERY_STRING'] contiene la cadena de consulta original de la URL actual, 
#incluyendo los parámetros y sus valores. 
header("Location: router.php".'?'.$_SERVER['QUERY_STRING']);
exit;
?>