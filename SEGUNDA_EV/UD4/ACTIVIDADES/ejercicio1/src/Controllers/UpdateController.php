<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Core\EntityManager;

class UpdateController extends AbstractController
{
    // Método para actualizar una tarea y redirigir de vuelta a la lista
    public function update($id)
    {
        // Obtener la instancia del EntityManager
        $em = (new EntityManager())->get();
      
        // Obtener el repositorio de Tasks
        $tasksRepository = $em->getRepository(Tasks::class);

        // Buscar la tarea por su ID
        $task = $tasksRepository->find($id);

        // Actualizar los campos de la tarea
        $task->setTitulo("Tarea Actualizada");
        $task->setDescripcion("Lore Ipsum Memento Mori");
        $task->setFechaCreacion(new \DateTime('2021-10-22'));
        $task->setFechaVencimiento(new \DateTime('2023-12-31'));

        // Persistir y guardar los cambios
        $em->persist($task);
        $em->flush();

        // Redirigir de vuelta a la lista
        header("Location: http://localhost/ud4/actividades/ejercicio1/public/index.php/lista");
        exit();
    }
}
