<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Tasks;

class DelController extends AbstractController
{
    // Método para eliminar una tarea por su ID
    public function del($id)
    {
        // Obtener la instancia del EntityManager
        $em = (new EntityManager())->get();

        // Obtener el repositorio de Tasks
        $tasksRepository = $em->getRepository(Tasks::class);

        // Buscar la tarea por su ID
        $task = $tasksRepository->find($id);

        // Si la tarea existe, eliminarla y persistir los cambios
        if ($task) {
            $em->remove($task);
            $em->flush();
        }

        // Redirigir de vuelta a la lista
        header("Location: http://localhost/ud4/actividades/ejercicio1/public/index.php/lista");
        exit();
    }

}
