<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Repository\TasksRepository;
use App\Core\EntityManager;

class UpdatingController extends AbstractController
{
    // Método para actualizar una tarea y redirigir de vuelta a la lista
    public function updating($id)
    {
        $em = (new EntityManager())->get();
        $classMetadata = $em->getClassMetadata(Tasks::class);
        $tasks = new TasksRepository($em,$classMetadata);
        $tasks->updating($id);
    }
}
