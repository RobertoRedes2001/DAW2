<?php

namespace App\Repository;

use App\Core\EntityManager;
use App\Entity\Employees;
use Doctrine\ORM\EntityRepository;

class EmployeesRepository extends EntityRepository
{
    public function insert(): void {
        // Crear una nueva instancia de Employees
        $empleado = new Employees;

        // Configurar los campos del empleado
        $empleado
            ->setEmp_no("")
            ->setApellidos("")
            ->setOficio("")
            ->setJefe("")
            ->setFecha_alta("")
            ->setSalario("")
            ->setComision("")
            ->setDept_no("");

        // Obtener el EntityManager y persistir el empleado
        $this->getEntityManager()->persist($empleado);

        // Guardar los cambios en la base de datos
        $this->getEntityManager()->flush();

        // Redirigir de vuelta a la lista
        header("Location: http://localhost/ud4/actividades/ejercicio3/public/index.php/Employees");
        exit();
    }

    public function update($id): void {
        // Obtener la instancia del EntityManager
        $em = (new EntityManager())->get();
        // Obtener el repositorio de Employees
        $employeesRepository = $em->getRepository(Employees::class);
        // Buscar la tarea por su ID
        $empleado = $employeesRepository->find($id);
        // Actualizar los campos de la empleado
        $empleado->setApellidos("");
        $empleado->setOficio("");
        $empleado->setJefe("");
        $empleado->setFecha_alta("");
        $empleado->setSalario("");
        $empleado->setComision("");
        $empleado->setDept_no("");
 
        // Persistir y guardar los cambios
        $em->persist($empleado);
        $em->flush();
        // Redirigir de vuelta a la lista
        header("Location: http://localhost/ud4/actividades/ejercicio3/public/index.php/Employees");
        exit();
    }

    public function delete($id): void {
          // Obtener la instancia del EntityManager
          $em = (new EntityManager())->get();

          // Obtener el repositorio de Employees
          $employeesRepository = $em->getRepository(Employees::class);
  
          // Buscar la empleado por su ID
          $emp = $employeesRepository->find($id);
  
          // Si el empleado existe, eliminarla y persistir los cambios
          if ($emp) {
              $em->remove($emp);
              $em->flush();
          }
  
          // Redirigir de vuelta a la lista
          header("Location: http://localhost/ud4/actividades/ejercicio3/public/index.php/Employees");
          exit();
    }
}
