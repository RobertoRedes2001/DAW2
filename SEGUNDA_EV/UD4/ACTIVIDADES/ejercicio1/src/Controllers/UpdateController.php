<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Core\EntityManager;

class UpdateController extends AbstractController
{
   public function update($id)
   {
      $em = (new EntityManager())->get();

      $tasksRepository = $em->getRepository(Tasks::class);
      $task = $tasksRepository->find($id);

      $task->setTitulo("Tarea Actualizada");
      $task->setDescripcion("Lore Ipsum Memento Mori");
      $task->setFechaCreacion(new \DateTime('2021-10-22'));
      $task->setFechaVencimiento(new \DateTime('2023-12-31'));

      $em->persist($task);
      $em->flush();
   }

}
