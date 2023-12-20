<?php

namespace App\Repository;

use App\Core\EntityManager;
use App\Entity\Clients;
use Doctrine\ORM\EntityRepository;

class ClientsRepository extends EntityRepository
{
    public function insert(): void {
        // Crear una nueva instancia de Clients
        $cliente = new Clients;

        // Configurar los campos de la cliente
        $cliente
            ->setClienteCod($_POST['clienteCod'])
            ->setNombre($_POST['nombre'])
            ->setDirec($_POST['direc'])
            ->setCiudad($_POST['ciudad'])
            ->setEstado($_POST['estado'])
            ->setDirec($_POST['codPostal'])
            ->setCodPostal( $_POST['codPostal'])
            ->setTelefono($_POST['telefono'])
            ->setArea($_POST['area'])
            ->setLimiteCred($_POST['limiteCredito'])
            ->setReprCode($_POST['reprCod'])
            ->setObservaciones($_POST['observaciones']);

        // Obtener el EntityManager y persistir la cliente
        $this->getEntityManager()->persist($cliente);

        // Guardar los cambios en la base de datos
        $this->getEntityManager()->flush();

        // Redirigir de vuelta a la lista
        header("Location: http://localhost/ud4/actividades/ejercicio3/public/index.php/clients");
        exit();
    }

    public function update($id): void {
        // Obtener la instancia del EntityManager
        $em = (new EntityManager())->get();
        // Obtener el repositorio de Clients
        $ClientsRepository = $em->getRepository(Clients::class);
        // Buscar el cliente por su ID
        $cliente = $ClientsRepository->find($id);
        // Actualizar los campos de el cliente
        $cliente->setNombre($_POST['nombre']);
        $cliente->setDirec($_POST['direc']);
        $cliente->setCiudad($_POST['ciudad']);
        $cliente->setEstado($_POST['estado']);
        $cliente->setDirec($_POST['codPostal']);
        $cliente->setCodPostal( $_POST['area']);
        $cliente->setTelefono($_POST['telefono']);
        $cliente->setReprCode($_POST['reprCod']);
        $cliente->setLimiteCred($_POST['limiteCredito']);
        $cliente->setReprCode($_POST['reprCod']);
        $cliente->setObservaciones($_POST['observaciones']);
        // Persistir y guardar los cambios
        $em->persist($cliente);
        $em->flush();
        // Redirigir de vuelta a la lista
        header("Location: http://localhost/ud4/actividades/ejercicio3/public/index.php/clients");
        exit();
    }

    public function delete($id): void {
          // Obtener la instancia del EntityManager
          $em = (new EntityManager())->get();

          // Obtener el repositorio de Clients
          $clientRepository = $em->getRepository(Clients::class);
  
          // Buscar la cliente por su ID
          $client = $clientRepository->find($id);
  
          // Si la cliente existe, eliminarla y persistir los cambios
          if ($client) {
              $em->remove($client);
              $em->flush();
          }
  
          // Redirigir de vuelta a la lista
          header("Location: http://localhost/ud4/actividades/ejercicio3/public/index.php/clients");
          exit();
    }
}
