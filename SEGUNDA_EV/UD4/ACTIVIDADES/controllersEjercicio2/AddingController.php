<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Repository\TasksRepository;
use App\Core\EntityManager;

class AddingController extends AbstractController
{
    // Método para agregar una nueva tarea
    public function adding()
    {
        // Obtener la instancia del EntityManager
        $em = (new EntityManager())->get();
        $classMetadata = $em->getClassMetadata(Tasks::class);
        $tasks = new TasksRepository($em,$classMetadata);
        $tasks->inserting();
    }

}
