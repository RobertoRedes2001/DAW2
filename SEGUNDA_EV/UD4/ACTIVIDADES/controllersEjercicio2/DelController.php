<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Repository\TasksRepository;
use App\Entity\Tasks;

class DelController extends AbstractController
{
    // Método para eliminar una tarea por su ID
    public function del($id)
    {
        $em = (new EntityManager())->get();
        $classMetadata = $em->getClassMetadata(Tasks::class);
        $tasks = new TasksRepository($em,$classMetadata);
        $tasks->delete($id);
    }

}
