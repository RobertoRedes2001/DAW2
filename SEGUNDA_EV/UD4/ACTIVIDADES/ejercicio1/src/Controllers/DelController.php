<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Tasks;

class DelController extends AbstractController
{
   public function del($id)
   {
      $em = (new EntityManager())->get();
      $tasksRepository = $em->getRepository(Tasks::class);
      $task = $tasksRepository->find($id);
      if ($task) $em->remove($task);
      $em->flush();
   }

}
