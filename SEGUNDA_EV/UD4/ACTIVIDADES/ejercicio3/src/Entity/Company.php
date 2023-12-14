<?php
namespace App\Entity;
use App\Repository\CompanyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompanyRepository::class)
 * @ORM\Table(name="cliente") 
 */
class Company
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $clienteCod;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $ciudad;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $estado;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $direc;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $codPostal;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $telfono;

    /**
     * @ORM\Column(type="integer")
     */
    private $area;

    /**
     * @ORM\Column(type="decimal", precision=9, scale=2, nullable=true)
     */
    private $limiteCred;

    /**
     * Get the value of clienteCod
     */ 
    public function getClienteCod()
    {
        return $this->clienteCod;
    }

    /**
     * Set the value of clienteCod
     *
     * @return  self
     */ 
    public function setClienteCod($clienteCod)
    {
        $this->clienteCod = $clienteCod;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of ciudad
     */ 
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @return  self
     */ 
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of direc
     */ 
    public function getDirec()
    {
        return $this->direc;
    }

    /**
     * Set the value of direc
     *
     * @return  self
     */ 
    public function setDirec($direc)
    {
        $this->direc = $direc;

        return $this;
    }

    /**
     * Get the value of codPostal
     */ 
    public function getCodPostal()
    {
        return $this->codPostal;
    }

    /**
     * Set the value of codPostal
     *
     * @return  self
     */ 
    public function setCodPostal($codPostal)
    {
        $this->codPostal = $codPostal;

        return $this;
    }

    /**
     * Get the value of telfono
     */ 
    public function getTelfono()
    {
        return $this->telfono;
    }

    /**
     * Set the value of telfono
     *
     * @return  self
     */ 
    public function setTelfono($telfono)
    {
        $this->telfono = $telfono;

        return $this;
    }

    /**
     * Get the value of area
     */ 
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of area
     *
     * @return  self
     */ 
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get the value of limiteCred
     */ 
    public function getLimiteCred()
    {
        return $this->limiteCred;
    }

    /**
     * Set the value of limiteCred
     *
     * @return  self
     */ 
    public function setLimiteCred($limiteCred)
    {
        $this->limiteCred = $limiteCred;

        return $this;
    }
}