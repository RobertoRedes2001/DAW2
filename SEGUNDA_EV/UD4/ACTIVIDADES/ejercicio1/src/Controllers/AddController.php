<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Core\EntityManager;

class AddController extends AbstractController
{
    // Método para agregar una nueva tarea
    public function add()
    {
        // Obtener la instancia del EntityManager
        $em = (new EntityManager())->get();

        // Crear una nueva instancia de Tasks
        $nuevo = new Tasks();
        $nuevo->setTitulo("nuevaTask");
        $nuevo->setDescripcion("lore ipsum y no se que más.");
        $nuevo->setFechaCreacion(new \DateTime('2021-10-24'));
        $nuevo->setFechaVencimiento(new \DateTime('2023-10-24'));

        // Persistir la nueva tarea en la base de datos
        $em->persist($nuevo);
        $em->flush();

        // Redirigir de vuelta a la lista
        header("Location: http://localhost/ud4/actividades/ejercicio1/public/index.php/lista");
        exit();
    }

}
