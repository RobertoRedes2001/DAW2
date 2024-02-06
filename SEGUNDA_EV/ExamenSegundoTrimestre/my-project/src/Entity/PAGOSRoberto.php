<?php

namespace App\Entity;

use App\Repository\PAGOSRobertoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PAGOSRobertoRepository::class)]
class PAGOSRoberto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "robertoPK")]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $pago = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: "empleado", referencedColumnName: "emp_no", nullable: false)]
    private ?Emp $empleado = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_pago = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPago(): ?string
    {
        return $this->pago;
    }

    public function setPago(string $pago): static
    {
        $this->pago = $pago;

        return $this;
    }

    public function getEmpleado(): ?Emp
    {
        return $this->empleado;
    }

    public function setEmpleado(?Emp $empleado): static
    {
        $this->empleado = $empleado;

        return $this;
    }

    public function getFechaPago(): ?\DateTimeInterface
    {
        return $this->fecha_pago;
    }

    public function setFechaPago(?\DateTimeInterface $fecha_pago): static
    {
        $this->fecha_pago = $fecha_pago;

        return $this;
    }
}
