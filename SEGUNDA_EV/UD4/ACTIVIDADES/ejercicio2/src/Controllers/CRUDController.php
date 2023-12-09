<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Repository\TasksRepository;
use App\Core\EntityManager;

class CRUDController extends AbstractController
{
    // Método para agregar una nueva tarea
    public function add()
    {
        // Renderizo el formulario
        $this->render("addForm.html", [null]);
    }

    // Método para agregar una nueva tarea II
    public function adding()
    {
        // Obtener la instancia del EntityManager
        $em = (new EntityManager())->get();
        $classMetadata = $em->getClassMetadata(Tasks::class);
        $tasks = new TasksRepository($em,$classMetadata);
        $tasks->insert();
    }

    // Método para eliminar una tarea por su ID
    public function del($id)
    {
        $em = (new EntityManager())->get();
        $classMetadata = $em->getClassMetadata(Tasks::class);
        $tasks = new TasksRepository($em,$classMetadata);
        $tasks->delete($id);
    }

    // Método para obtener y mostrar las tareas paginadas
    public function listado($page=1)
    {
      // Obtener la instancia del EntityManager
      $em = (new EntityManager())->get();
      // Obtener el repositorio de Tasks
      $tasksRepository = $em->getRepository(Tasks::class);
      // Número de tareas por página
      $tasksPerPage = 5;
      // Calcular el desplazamiento
      $offset = ($page - 1) * $tasksPerPage;
      // Contar el total de tareas
      $totalTasks = count($tasksRepository->findAll());
      // Calcular el total de páginas
      $totalPages = ceil($totalTasks / $tasksPerPage);
      // Obtener las tareas paginadas
      $tasks = $tasksRepository->findBy([], null, $tasksPerPage, $offset);
      // Renderizar la plantilla con los resultados y la paginación
      $this->render("list.html.twig", [
          "resultados" => $tasks,
          "currentPage" => $page,
          "totalPages" => $totalPages
      ]); 
    }

    // Método para actualizar una tarea y redirigir de vuelta a la lista
    public function update($id)
    {
        $em = (new EntityManager())->get();
        // Obtener el repositorio de Tasks
        $tasksRepository = $em->getRepository(Tasks::class);
        // Buscar la tarea por su ID
        $tasks = $tasksRepository->find($id);
        $this->render("updForm.html.twig", [
            "task" => $tasks,
        ]);
    }

    // Método para actualizar una tarea y redirigir de vuelta a la lista
    public function updating($id)
    {
        $em = (new EntityManager())->get();
        $classMetadata = $em->getClassMetadata(Tasks::class);
        $tasks = new TasksRepository($em,$classMetadata);
        $tasks->update($id);
    }

}