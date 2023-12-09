<?php

namespace App\Repository;

use App\Entity\Tasks;
use App\Core\EntityManager;
use DateInterval;
use DateTime;
use Doctrine\ORM\EntityRepository;

class TasksRepository extends EntityRepository
{
    public function insert(): void {
        // Crear una nueva instancia de Tasks
        $tarea = new Tasks;

        // Configurar los campos de la tarea
        $tarea
            ->setTitulo($_POST['titulo'])
            ->setDescripcion($_POST['descripcion'])
            ->setFechaCreacion(new DateTime("now"))
            ->setFechaVencimiento((new DateTime())->add(new DateInterval("P7D")));

        // Obtener el EntityManager y persistir la tarea
        $this->getEntityManager()->persist($tarea);

        // Guardar los cambios en la base de datos
        $this->getEntityManager()->flush();

        // Redirigir de vuelta a la lista
        header("Location: http://localhost/ud4/actividades/ejercicio2/public/index.php/lista");
        exit();
    }

    public function update($id): void {
        // Obtener la instancia del EntityManager
        $em = (new EntityManager())->get();
        // Obtener el repositorio de Tasks
        $tasksRepository = $em->getRepository(Tasks::class);
        // Buscar la tarea por su ID
        $task = $tasksRepository->find($id);
        // Actualizar los campos de la tarea
        $task->setTitulo($_POST['titulo']);
        $task->setDescripcion($_POST['descripcion']);
        // Persistir y guardar los cambios
        $em->persist($task);
        $em->flush();
        // Redirigir de vuelta a la lista
        header("Location: http://localhost/ud4/actividades/ejercicio2/public/index.php/lista");
        exit();
    }
    
    

    public function delete($id): void {
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
          header("Location: http://localhost/ud4/actividades/ejercicio2/public/index.php/lista");
          exit();
    }
}
