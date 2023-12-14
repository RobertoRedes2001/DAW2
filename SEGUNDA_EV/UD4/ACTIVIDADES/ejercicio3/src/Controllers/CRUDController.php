<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Company;
use App\Repository\CompanyRepository;
use App\Core\EntityManager;

class CRUDController extends AbstractController
{
    public function baseTemplate()
    {
        // Renderizo el formulario
        $this->render("index.html", [null]);
    }

    // Método para agregar una nueva tarea
    public function add()
    {
        // Renderizo el formulario
        $this->render("form.html", [null]);
    }

    // Método para agregar una nueva tarea II
    public function adding()
    {
        // Obtener la instancia del EntityManager
        $em = (new EntityManager())->get();
        $classMetadata = $em->getClassMetadata(Company::class);
        $clients = new CompanyRepository($em,$classMetadata);
        $clients->insert();
    }

    // Método para eliminar una tarea por su ID
    public function del($id)
    {
        $em = (new EntityManager())->get();
        $classMetadata = $em->getClassMetadata(Company::class);
        $clients = new CompanyRepository($em,$classMetadata);
        $clients->delete($id);
    }

    // Método para obtener y mostrar las tareas paginadas
    public function listado($page=1)
    {
      // Obtener la instancia del EntityManager
      $em = (new EntityManager())->get();
      // Obtener el repositorio de Tasks
      $companyRepository = $em->getRepository(Company::class);
      // Número de tareas por página
      $clientsPerPage = 5;
      // Calcular el desplazamiento
      $offset = ($page - 1) * $clientsPerPage;
      // Contar el total de tareas
      $totalClients = count($companyRepository->findAll());
      // Calcular el total de páginas
      $totalPages = ceil($totalClients / $clientsPerPage);
      // Obtener las tareas paginadas
      $client = $companyRepository->findBy([], null, $clientsPerPage, $offset);
      // Renderizar la plantilla con los resultados y la paginación
      $this->render("clientsList.html.twig", [
          "resultados" => $client,
          "currentPage" => $page,
          "totalPages" => $totalPages,
      ]); 
    }

    // Método para actualizar una tarea y redirigir de vuelta a la lista
    public function update($id)
    {
        $em = (new EntityManager())->get();
        // Obtener el repositorio de Tasks
        $companyRepository = $em->getRepository(Company::class);
        // Buscar la tarea por su ID
        $client = $companyRepository->find($id);
        $this->render("updForm.html.twig", [
            "task" => $client,
        ]);
    }

    // Método para actualizar una tarea y redirigir de vuelta a la lista
    public function updating($id)
    {
        $em = (new EntityManager())->get();
        $classMetadata = $em->getClassMetadata(Company::class);
        $tasks = new CompanyRepository($em,$classMetadata);
        $tasks->update($id);
    }

}