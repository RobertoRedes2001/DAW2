<?php

namespace App\Entity;

use App\Repository\EmpRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpRepository::class)]
class Emp
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "EMP_NO")]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $APELLIDOS = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $OFICIO = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $JEFE = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $FECHA_ALTA = null;

    #[ORM\Column(nullable: true)]
    private ?int $SALARIO = null;

    #[ORM\Column]
    private ?int $COMISION = null;

    #[ORM\ManyToOne(inversedBy: 'EMP_NO')]
    #[ORM\JoinColumn(nullable: false)]
    private ?dept $DEPT_NO = null;

    #[ORM\OneToMany(mappedBy: 'REPR_COD', targetEntity: Cliente::class)]
    private Collection $CLIENTE_COD;

    public function __construct()
    {
        $this->CLIENTE_COD = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAPELLIDOS(): ?string
    {
        return $this->APELLIDOS;
    }

    public function setAPELLIDOS(string $APELLIDOS): static
    {
        $this->APELLIDOS = $APELLIDOS;

        return $this;
    }

    public function getOFICIO(): ?string
    {
        return $this->OFICIO;
    }

    public function setOFICIO(?string $OFICIO): static
    {
        $this->OFICIO = $OFICIO;

        return $this;
    }

    public function getJEFE(): ?int
    {
        return $this->JEFE;
    }

    public function setJEFE(?int $JEFE): static
    {
        $this->JEFE = $JEFE;

        return $this;
    }

    public function getFECHAALTA(): ?\DateTimeInterface
    {
        return $this->FECHA_ALTA;
    }

    public function setFECHAALTA(?\DateTimeInterface $FECHA_ALTA): static
    {
        $this->FECHA_ALTA = $FECHA_ALTA;

        return $this;
    }

    public function getSALARIO(): ?int
    {
        return $this->SALARIO;
    }

    public function setSALARIO(?int $SALARIO): static
    {
        $this->SALARIO = $SALARIO;

        return $this;
    }

    public function getCOMISION(): ?int
    {
        return $this->COMISION;
    }

    public function setCOMISION(int $COMISION): static
    {
        $this->COMISION = $COMISION;

        return $this;
    }

    public function getDEPTNO(): ?dept
    {
        return $this->DEPT_NO;
    }

    public function setDEPTNO(?dept $DEPT_NO): static
    {
        $this->DEPT_NO = $DEPT_NO;

        return $this;
    }

    /**
     * @return Collection<int, Cliente>
     */
    public function getCLIENTECOD(): Collection
    {
        return $this->CLIENTE_COD;
    }

    public function addCLIENTECOD(Cliente $cLIENTECOD): static
    {
        if (!$this->CLIENTE_COD->contains($cLIENTECOD)) {
            $this->CLIENTE_COD->add($cLIENTECOD);
            $cLIENTECOD->setREPRCOD($this);
        }

        return $this;
    }

    public function removeCLIENTECOD(Cliente $cLIENTECOD): static
    {
        if ($this->CLIENTE_COD->removeElement($cLIENTECOD)) {
            // set the owning side to null (unless already changed)
            if ($cLIENTECOD->getREPRCOD() === $this) {
                $cLIENTECOD->setREPRCOD(null);
            }
        }

        return $this;
    }
}
