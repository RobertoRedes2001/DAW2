<?php

namespace App\Repository;

use App\Entity\Tasks;
use App\Core\EntityManager;
use App\Entity\Company;
use DateInterval;
use DateTime;
use Doctrine\ORM\EntityRepository;

class CompanyRepository extends EntityRepository
{
    public function insert(): void {
        // Crear una nueva instancia de Tasks
        $cliente = new Company;

        // Configurar los campos de la tarea
        $cliente
            ->setNombre("Sujeto1")
            ->setDirec("C/Falsa, 123")
            ->setCiudad("")
            ->setEstado('ES')
            ->setDirec('Dirección de la Empresa')
            ->setCodPostal('12345')
            ->setTelfono('123-456-7890')
            ->setArea(100)
            ->setLimiteCred(5000.00);

        // Obtener el EntityManager y persistir la tarea
        $this->getEntityManager()->persist($cliente);

        // Guardar los cambios en la base de datos
        $this->getEntityManager()->flush();

        // Redirigir de vuelta a la lista
        header("Location: http://localhost/ud4/actividades/ejercicio3/public/index.php/lista");
        exit();
    }

    public function update($id): void {
        // Obtener la instancia del EntityManager
        $em = (new EntityManager())->get();
        // Obtener el repositorio de Tasks
        $companyRepository = $em->getRepository(Company::class);
        // Buscar la tarea por su ID
        $cliente = $companyRepository->find($id);
        // Actualizar los campos de la tarea
        $cliente->setNombre('Nombre de la Empresa');
        $cliente->setCiudad('Ciudad');
        $cliente->setEstado('ES');
        $cliente->setDirec('Dirección de la Empresa');
        $cliente->setCodPostal('12345');
        $cliente->setTelfono('123-456-7890');
        $cliente->setArea(100);
        $cliente->setLimiteCred(5000.00);
        // Persistir y guardar los cambios
        $em->persist($cliente);
        $em->flush();
        // Redirigir de vuelta a la lista
        header("Location: http://localhost/ud4/actividades/ejercicio3/public/index.php/lista");
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
