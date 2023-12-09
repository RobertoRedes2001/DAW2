<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Repository\TasksRepository;
use App\Core\EntityManager;

class UpdateController extends AbstractController
{
    // Método para actualizar una tarea y redirigir de vuelta a la lista
    public function update($id)
    {
        $em = (new EntityManager())->get();
        // Obtener el repositorio de Tasks
        $tasksRepository = $em->getRepository(Tasks::class);
        // Buscar la tarea por su ID
        $tasks = $tasksRepository->find($id);
        $this->render("updForm.html.twig", [
            "task" => $tasks,
        ]);
    }
}
