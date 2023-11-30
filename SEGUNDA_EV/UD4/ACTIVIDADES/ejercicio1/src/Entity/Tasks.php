<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TasksRepository::class)
 * @ORM\Table(name="tareas") 
 */
class Tasks
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length="11")
     * @ORM\GeneratedValue
     */
    private $id;

    /** @ORM\Column(type="string", length="255") */
    private $titulo;

    /** @ORM\Column(type="text") */
    private $descripcion;

    /** @ORM\Column(type="date") */
    private $fecha_creacion;

    /** @ORM\Column(type="date") */
    private $fecha_vencimiento;

    
   /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Get the value of fecha_creacion
     */ 
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * Get the value of fecha_vencimiento
     */ 
    public function getFechaVencimiento()
    {
        return $this->fecha_vencimiento;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Set the value of fecha_creacion
     *
     * @return  self
     */ 
    public function setFechaCreacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }

    /**
     * Set the value of fecha_vencimiento
     *
     * @return  self
     */ 
    public function setFechaVencimiento($fecha_vencimiento)
    {
        $this->fecha_vencimiento = $fecha_vencimiento;

        return $this;
    }
}