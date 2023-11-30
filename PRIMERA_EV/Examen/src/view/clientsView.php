<?php

namespace Examen\App\View;

class ClientsView{
    // Método para generar una tabla HTML con todos los clientes
    function allTable(array $clientes) {
        echo '<table border="1">';
    
        foreach ($clientes as $cliente) {
            echo '<tr>';
            // Enlace a la vista de detalle para cada cliente, con el CLIENTE_COD como parámetro
            echo '<td><a href="http://localhost/public/router.php/clientsdetail/'.$cliente["CLIENTE_COD"].'">' . $cliente["NOMBRE"] . '</a></td>';
            echo '<td>' . $cliente["CIUDAD"] . '</td>';
            echo '</tr>';
        }
    
        echo '</table>';
        // Enlace al menú principal
        echo '<a href="http://localhost">Menú Principal</a>';
    }

    // Método para generar una tabla HTML con detalles de un cliente
    function detailTable(array $clientes) {
        echo '<table border="1">';
    
        foreach ($clientes as $cliente) {
            echo '<tr>';
            echo '<td>' . $cliente["CLIENTE_COD"] . '</td>';
            echo '<td>' . $cliente["NOMBRE"] . '</td>';
            echo '</tr>';
            echo '<tr>';
            // Detalles adicionales del cliente, como dirección, ciudad, etc.
            echo '<td>' . $cliente["DIREC"] . $cliente["CIUDAD"] . ' ('.$cliente["COD_POSTAL"] .'), '.$cliente["ESTADO"] .' #'.$cliente["AREA"] . '# </td>';
            echo '<td> TEL: ' . $cliente["TELEFONO"] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td colspan="2">' . $cliente["LIMITE_CREDITO"] . ' €</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td colspan="2">' . $cliente["OBSERVACIONES"] . '</td>';
            echo '</tr>';
        }
    
        echo '</table>';
        // Enlace para volver al listado de clientes
        echo '<a href="http://localhost/public/router.php/clients">Volver a Listado</a>';
    }
}

?>
