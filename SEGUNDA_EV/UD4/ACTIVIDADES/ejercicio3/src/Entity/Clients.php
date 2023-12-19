<?php
namespace App\Entity;
use App\Repository\ClientsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientsRepository::class)
 * @ORM\Table(name="CLIENTE") 
 */
class Clients
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $cliente_cod;

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
    private $cod_postal;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $telefono;

    /**
     * @ORM\Column(type="integer")
     */
    private $area;

    /**
     * @ORM\Column(type="integer")
     */
    private $repr_cod;

    /**
     * @ORM\Column(type="string")
     */
    private $observaciones;

    /**
     * @ORM\Column(type="decimal", precision=9, scale=2, nullable=true)
     */
    private $limite_credito;

    /**
     * Get the value of clienteCod
     */ 
    public function getClienteCod()
    {
        return $this->cliente_cod;
    }

    /**
     * Set the value of clienteCod
     *
     * @return  self
     */ 
    public function setClienteCod($clienteCod)
    {
        $this->cliente_cod = $clienteCod;

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
        return $this->cod_postal;
    }

    /**
     * Set the value of codPostal
     *
     * @return  self
     */ 
    public function setCodPostal($codPostal)
    {
        $this->cod_postal = $codPostal;

        return $this;
    }

    /**
     * Get the value of telfono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telfono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

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
        return $this->limite_credito;
    }

    /**
     * Set the value of limiteCred
     *
     * @return  self
     */ 
    public function setLimiteCred($limiteCred)
    {
        $this->limite_credito = $limiteCred;

        return $this;
    }

    /**
     * Get the value of observaciones
     */ 
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set the value of observaciones
     *
     * @return  self
     */ 
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get the value of repr_code
     */ 
    public function getReprCode()
    {
        return $this->repr_cod;
    }

    /**
     * Set the value of repr_code
     *
     * @return  self
     */ 
    public function setReprCode($repr_code)
    {
        $this->repr_cod = $repr_code;

        return $this;
    }
}