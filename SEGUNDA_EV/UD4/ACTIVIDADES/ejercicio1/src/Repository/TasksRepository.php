<?php

namespace App\Repository;

use App\Entity\Tasks;
use App\Core\EntityManager;
use DateInterval;
use DateTime;
use Doctrine\ORM\EntityRepository;

class TasksRepository extends EntityRepository
{
    // Método para insertar una nueva tarea
    public function insert(): void {
        // Crear una nueva instancia de Tasks
        $tarea = new Tasks;

        // Configurar los campos de la tarea
        $tarea
            ->setTitulo("Nueva Tarea")
            ->setDescripcion("Escribe aquí una descripción")
            ->setFechaCreacion(new DateTime("now"))
            ->setFechaVencimiento((new DateTime())->add(new DateInterval("P7D")));

        // Obtener el EntityManager y persistir la tarea
        $this->getEntityManager()->persist($tarea);

        // Guardar los cambios en la base de datos
        $this->getEntityManager()->flush();
    }
}
