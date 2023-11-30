<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Tasks;

class ListController extends AbstractController
{
   public function listado($page = null)
   {
      $em = (new EntityManager())->get();
      $tasksRepository = $em->getRepository(Tasks::class);
      $this->render("list.html.twig", [
         "resultados" => $tasksRepository->findAll()
      ]);
   }

}
