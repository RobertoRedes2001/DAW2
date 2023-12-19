<?php
namespace App\Entity;
use App\Repository\ClientsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmployeesRepository::class)
 * @ORM\Table(name="EMP") 
 */
class Employees
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $emp_no;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $oficio;

    /**
     * @ORM\Column(type="integer")
     */
    private $jefe;

    /**
     *@ORM\Column(type="date") 
     */
    private $fecha_alta;

    /**
     * @ORM\Column(type="integer")
     */
    private $salario;

     /**
     * @ORM\Column(type="integer")
     */
    private $comision;

    /**
     * @ORM\Column(type="integer")
     */
    private $dept_no;


    /**
     * Get the value of emp_no
     */ 
    public function getEmp_no()
    {
        return $this->emp_no;
    }

    /**
     * Set the value of emp_no
     *
     * @return  self
     */ 
    public function setEmp_no($emp_no)
    {
        $this->emp_no = $emp_no;

        return $this;
    }

    /**
     * Get the value of apellidos
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of oficio
     */ 
    public function getOficio()
    {
        return $this->oficio;
    }

    /**
     * Set the value of oficio
     *
     * @return  self
     */ 
    public function setOficio($oficio)
    {
        $this->oficio = $oficio;

        return $this;
    }

    /**
     * Get the value of jefe
     */ 
    public function getJefe()
    {
        return $this->jefe;
    }

    /**
     * Set the value of jefe
     *
     * @return  self
     */ 
    public function setJefe($jefe)
    {
        $this->jefe = $jefe;

        return $this;
    }

    /**
     * Get *@ORM\Column(type="date")
     */ 
    public function getFecha_alta()
    {
        return $this->fecha_alta;
    }

    /**
     * Set *@ORM\Column(type="date")
     *
     * @return  self
     */ 
    public function setFecha_alta($fecha_alta)
    {
        $this->fecha_alta = $fecha_alta;

        return $this;
    }

    /**
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of comision
     */ 
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set the value of comision
     *
     * @return  self
     */ 
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get the value of dept_no
     */ 
    public function getDept_no()
    {
        return $this->dept_no;
    }

    /**
     * Set the value of dept_no
     *
     * @return  self
     */ 
    public function setDept_no($dept_no)
    {
        $this->dept_no = $dept_no;

        return $this;
    }
}