<?php

namespace Examen\App\Core\Interfaces;

// Interfaz para definir métodos relacionados con la base de datos
interface IDataBase
{
    // Método para buscar un registro específico en la tabla
    public function find($tabla, $clave, $id);

    // Método para obtener todos los registros de una tabla
    public function findAll($tabla);
    
}
