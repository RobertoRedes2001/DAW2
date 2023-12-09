<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Entity\Tasks;
use App\Repository\TasksRepository;
use App\Core\EntityManager;

class AddController extends AbstractController
{
    // Método para agregar una nueva tarea
    public function add()
    {
        // Renderizo el formulario
        $this->render("addForm.html", [null]);
    }

}
