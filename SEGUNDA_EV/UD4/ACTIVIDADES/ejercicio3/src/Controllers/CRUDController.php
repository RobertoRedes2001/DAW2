<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Clients;
use App\Repository\ClientsRepository;
use App\Entity\Employees;
use App\Repository\EmployeesRepository;
use App\Core\EntityManager;

class CRUDController extends AbstractController
{
    public function baseTemplate()
    {
        // Renderizo el formulario
        $this->render("index.html", [null]);
    }

    // Método para actualizar un cliente y redirigir de vuelta a la lista
    public function detalleCliente($id)
    {
        $em = (new EntityManager())->get();
        // Obtener el repositorio de Cliente
        $ClientsRepository = $em->getRepository(Clients::class);
        // Buscar la tarea por su ID
        $client = $ClientsRepository->find($id);
        $this->render("detailClient.html.twig", [
            "client" => $client,
        ]);
    }

    // Método para renderizar el formulario de un nuevo cliente
    public function add()
    {
        // Renderizo el formulario
        $this->render("clientsForm.html.twig", [null]);
    }

    // Método para agregar un nuevo Cliente
    public function adding()
    {
        // Obtener la instancia del EntityManager
        $em = (new EntityManager())->get();
        $classMetadata = $em->getClassMetadata(Clients::class);
        $clients = new ClientsRepository($em,$classMetadata);
        $clients->insert();
    }

    // Método para eliminar un cliente por su ID
    public function del($id)
    {
        $em = (new EntityManager())->get();
        $classMetadata = $em->getClassMetadata(Clients::class);
        $clients = new ClientsRepository($em,$classMetadata);
        $clients->delete($id);
    }

    // Método para obtener y mostrar las tareas paginadas
    public function listadoCliente($page=1)
    {
      // Obtener la instancia del EntityManager
      $em = (new EntityManager())->get();
      // Obtener el repositorio de Clients
      $ClientsRepository = $em->getRepository(Clients::class);
      // Número de clientes por página
      $clientsPerPage = 10;
      // Calcular el desplazamiento
      $offset = ($page - 1) * $clientsPerPage;
      // Contar el total de cliente
      $totalClients = count($ClientsRepository->findAll());
      // Calcular el total de páginas
      $totalPages = ceil($totalClients / $clientsPerPage);
      // Obtener las tareas paginadas
      $client = $ClientsRepository->findBy([], null, $clientsPerPage, $offset);
      // Renderizar la plantilla con los resultados y la paginación
      $this->render("clientsList.html.twig", [
          "resultados" => $client,
          "currentPage" => $page,
          "totalPages" => $totalPages,
      ]); 
    }

    public function listadoEmp($page=1)
    {
      // Obtener la instancia del EntityManager
      $em = (new EntityManager())->get();
      // Obtener el repositorio de Employees
      $EmpRepo = $em->getRepository(Employees::class);
      // Número de tareas por página
      $empsPerPage = 10;
      // Calcular el desplazamiento
      $offset = ($page - 1) * $empsPerPage;
      // Contar el total de empleados
      $totalEmps = count($EmpRepo->findAll());
      // Calcular el total de páginas
      $totalPages = ceil($totalEmps / $empsPerPage);
      // Obtener los empleados paginados
      $emp = $EmpRepo->findBy([], null, $empsPerPage, $offset);
      // Renderizar la plantilla con los resultados y la paginación
      $this->render("empList.html.twig", [
          "resultados" => $emp,
          "currentPage" => $page,
          "totalPages" => $totalPages,
      ]); 
    }

    // Método para actualizar un cliente y redirigir de vuelta a la lista
    public function update($id)
    {
        $em = (new EntityManager())->get();
        // Obtener el repositorio de Clients
        $ClientsRepository = $em->getRepository(Clients::class);
        // Buscar la tarea por su ID
        $client = $ClientsRepository->find($id);
        $this->render("updateClientForm.html.twig", [
            "client" => $client,
        ]);
    }

    // Método para actualizar un cliente y redirigir de vuelta a la lista
    public function updating($id)
    {
        $em = (new EntityManager())->get();
        $classMetadata = $em->getClassMetadata(Clients::class);
        $clients = new ClientsRepository($em,$classMetadata);
        $clients->update($id);
    }

}