<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Core\EntityManager;

class AddController extends AbstractController
{
   public function add()
   {
      $em = (new EntityManager())->get();
      $nuevo = new Tasks();
      $nuevo->setTitulo("nuevaTask");
      $nuevo->setDescripcion("lore ipsum y no se que más.");
      $nuevo->setFechaCreacion(new \DateTime('2021-10-24'));
      $nuevo->setFechaVencimiento(new \DateTime('2023-10-24'));
      $em->persist($nuevo);
      $em->flush();
   }

}
