<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Entity\Tasks;

class ListController extends AbstractController
{
    // Método para obtener y mostrar las tareas paginadas
    public function listado($page = 1)
    {
        // Obtener la instancia del EntityManager
        $em = (new EntityManager())->get();

        // Obtener el repositorio de Tasks
        $tasksRepository = $em->getRepository(Tasks::class);

        // Número de tareas por página
        $tasksPerPage = 20;

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
}
